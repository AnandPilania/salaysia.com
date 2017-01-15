<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Categories;
use App\Listings;
use App\Posts;
use App\Brands;
use App\Courses;
use App\Countries;
use App\FavouriteUniversity;
use App\FavouriteCourse;
use App\Inquiries; 
use App\Testimonials;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App; 

class IndexController extends Controller
{
	 

    public function index()
    { 
    	if(!$this->alreadyInstalled()) {
           return redirect('install');
        }
        $listings = Listings::where('status','1')->orderBy('id','desc')->paginate(100);
        $testimonials= Testimonials::where('status','1')->orderBy('id','desc')->get();
        
        $brands= Brands::where('status','1')->orderBy('id','desc')->get();

        if(App::getLocale()!='en'){
            //load translation version of the columns
            $courses= DB::table('courses')
                        ->join('courses_trans','courses.id','=','courses_trans.id')
                        ->select('courses.id','courses.featured_image','courses_trans.title',
                            'courses.course_slug','courses_trans.description')
                        ->where('courses.status','1')->where('courses_trans.lang',App::getLocale())
                        ->orderBy('courses.id','desc')->limit(6)->get();


            $services= DB::table('posts')
                        ->join('posts_trans','posts.id','=','posts_trans.id')
                        ->select('posts.id','posts.featured_image','posts_trans.title',
                            'posts_trans.body')
                        ->where('posts.active','1')->where('posts_trans.lang',App::getLocale())
                        ->orderBy('posts.id','desc')->limit(6)->get();

            $countries= DB::table('countries')
                        ->join('countries_trans','countries.id','=','countries_trans.id')
                        ->select('countries.id','countries.featured_image','countries_trans.title',
                            'countries_trans.description','countries.testimonial_slug')
                        ->where('countries.status','1')->where('countries_trans.lang',App::getLocale())
                        ->orderBy('countries.id','desc')->limit(12)->get();

        }else{//en
            $courses= Courses::where('status','1')->orderBy('id','desc')->limit(6)->get();
            $services= Posts::where('active','1')->orderBy('id','desc')->limit(6)->get();
            $countries= Countries::where('status','1')->orderBy('id','asc')->limit(12)->get();    
        }

        return view('pages.home',compact('listings','testimonials','services','brands','courses','countries'));
    }
    
    public function about_us()
    { 
                  
        return view('pages.about');
    }

    public function contact_us()
    {        
        return view('pages.contact');
    }
    
    public function termsandconditions()
    { 
                  
        return view('pages.termsandconditions');
    }

    public function privacypolicy()
    { 
                  
        return view('pages.privacypolicy');
    }

    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }

    /**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
     
     public function login()
    { 
       if(Auth::check())
       { 
            return redirect('/dashboard');
       }
       else
       {
            return view('pages.login');
       }

        
    }

    public function postLogin(Request $request)
    {
        
    //echo bcrypt('123456');
    //exit; 
        
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

         
        
         if (Auth::attempt($credentials, $request->has('remember'))) {

           /* if(Auth::user()->usertype=='banned'){
                \Auth::logout();
                return array("errors" => 'You account has been banned!');
            }*/

            return $this->handleUserWasAuthenticated($request);
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');
       return redirect('/login')->withErrors('The email or the password is invalid. Please try again.');
        
    }
    
     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect('/dashboard'); 
    }
    
     public function forgot_password()
    { 
       
            return view('pages.forgot_password');
        
    }

    
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        \Session::flash('flash_message', 'Logout successfully...');
        return redirect('/login');
    }
    public function register()
    { 
        return view('pages.register');
    }
    public function postRegister(Request $request)
    { 
        $data =  \Input::except(array('_token')) ;
        $inputs = $request->all();
        $rule=array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'required|min:3|confirmed'
                 );
        $validator = \Validator::make($data,$rule);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        } 
        $user = new User;
        $user->usertype = 'User';
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email']; 
        $user->mobile = $inputs['mobile'];
        $user->user_role = 'Regular user';
        $user->dob = $inputs['dd'].'-'.$inputs['mm'].'-'.$inputs['yyyy'];
        $user->country=$inputs['country'];
        $user->study_plan=$inputs['study_plan'];   
        $user->password= bcrypt($inputs['password']); 
        $user->save();
            \Session::flash('flash_message', 'Register successfully...');
            return \Redirect::back();
    }    
    public function dashboard()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
            $user = User::findOrFail($user_id);
             return view('pages.dashboard',compact('user'));
       }
       else
       {       
            return redirect('/login');
       }   
    } 
    public function profile()
    { 
        if(!Auth::check())
       {
            \Session::flash('flash_message', 'Access denied!');
            return redirect('login');
        }
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        return view('pages.profile',compact('user'));
    } 
    public function editprofile(Request $request)
    { 
        $data =  \Input::except(array('_token')) ;
        $inputs = $request->all();
            $rule=array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|max:200'
                 );
        $validator = \Validator::make($data,$rule);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        } 
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        $icon = $request->file('user_icon');
         
        if($icon){
            $tmpFilePath = 'upload/members/';
            $hardPath =  str_slug($inputs['first_name'], '-').'-'.md5(time());
            $img = Image::make($icon);
            $img->fit(250, 250)->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(80, 80)->save($tmpFilePath.$hardPath. '-s.jpg');
            $user->image_icon = $tmpFilePath.$hardPath.'-b.jpg';
        }
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->contact_email = $inputs['contact_email'];
        $user->website = $inputs['website'];        
        $user->address = $inputs['address'];
        $user->country = $inputs['country'];
        $user->dob = $inputs['dob'];
        $user->facebook_url = $inputs['facebook_url'];
        $user->twitter_url = $inputs['twitter_url'];
        $user->linkedin_url = $inputs['linkedin_url'];
        $user->dribbble_url = $inputs['dribbble_url'];
        $user->instagram_url = $inputs['instagram_url'];  
        $user->save();
            \Session::flash('flash_message', 'Changes Saved');
            return \Redirect::back();
    }        

    public function change_password()
    { 
          if(!Auth::check())
       {
            \Session::flash('flash_message', 'Access denied!');
            return redirect('login');
        }
        
        return view('pages.change_password');
    }
     public function edit_password(Request $request)
    { 
        $data =  \Input::except(array('_token')) ;
        $inputs = $request->all();
        $rule=array(                
                'password' => 'required|min:3|confirmed'
                 );
        $validator = \Validator::make($data,$rule);
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->password= bcrypt($inputs['password']);  
        $user->save(); 
            \Session::flash('flash_message', 'Password has been changed...');
            return \Redirect::back();
    } 
    public function contact_send(Request $request)
    { 
        $data =  \Input::except(array('_token')) ;
        $inputs = $request->all();
        $rule=array(                
                'firstname' => 'required',
                'email' => 'required|email|max:75'
                 );
         $validator = \Validator::make($data,$rule);
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
       $inquiries=new Inquiries;
        $inquiries->firstname = $inputs['firstname'];
        $inquiries->lastname = $inputs['lastname'];
        $inquiries->countryCode=$inputs['countryCode'];
        $inquiries->mobile = $inputs['mobile'] ;
        $inquiries->level =$inputs['level']  ; 
        $inquiries->email = $inputs['email'];
        $inquiries->monthRange =$inputs['monthRange'];
        $inquiries->timeOptionId=$inputs['timeOptionId'];
        $inquiries->uni_id=$inputs['uni_id'];
        $inquiries->user_id=Auth::user()->id;
        $inquiries->save();    
            $data = array(
            'Firstname' => $inputs['firstname'],
            'lastname' => $inputs['lastname'],
            'countryCode'=>$inputs['countryCode'],
            'Mobile' => $inputs['mobile'], 
            'level' =>$inputs['level'],   
            'email' => $inputs['email'], 
            'monthRange'=>$inputs['monthRange'],
            'timeOptionId'=>$inputs['timeOptionId'],
             );
            $subject='Inquiry For Course';
            \Mail::send('emails.contact', $data, function ($message) use ($subject){
                $message->from(getcong('site_email'), getcong('site_name'));
                $message->to(getcong('site_email'))->subject($subject);
            });
            \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');
            return \Redirect::back();
    }  
        public function ajax_favouriteuniversities($listing_id)
        {
            $user_id=Auth::user()->id;
            $user_id=Auth::user()->id;
            $listing_id=$listing_id;
 
            $favourite_university=new FavouriteUniversity;
            $favourite_university->user_id =$user_id;
            $favourite_university->listing_id =$listing_id;
            $favourite_university->save(); 
        }  
       public function ajax_favouritecourses($listing_id)
        {
            $user_id=Auth::user()->id;
            $listing_id=$listing_id;
            $favourite_course=new FavouriteCourse;
            $favourite_course->user_id =$user_id;
            $favourite_course->listing_id =$listing_id;
            $favourite_course->save(); 
        } 
       public function delete_favourite_uni(Request $request)
   {
$listing_id=$request->listing_id;

    $user_id=Auth::user()->id;
    $listings = DB::table('listings_favourite_university')->where('user_id',$user_id)->where('listing_id',$listing_id)->delete();
   $listings = DB::table('listings')
                           ->leftJoin('listings_favourite_university', 'listings.id', '=', 'listings_favourite_university.listing_id')
                           ->select('listings.*')->where('listings_favourite_university.user_id',$user_id)
                           ->get();

      return view('pages.myfavourite_university',compact('listings'));  
   }
   public function delete_favorite_course(Request $request)
   { 
$listing_id=$request->listing_id;

    $user_id=Auth::user()->id;
      $listings = DB::table('listings_favourite_courses')->where('user_id',$user_id)->where('listing_id',$listing_id)->delete();
      $listings = DB::table('courses')
                           ->leftJoin('listings_favourite_courses', 'courses.id', '=', 'listings_favourite_courses.listing_id')
                           ->select('courses.*')->where('listings_favourite_courses.user_id',$user_id)
                           ->get();
      return view('pages.myfavourite_course',compact('listings'));                    
   }
 public function addeditUser()    { 
     
      
        return view('pages.user_register');
    }
public function myuser_postRegister(Request $request)
    { 
       $data =  \Input::except(array('_token')) ;
	    
	    $inputs = $request->all();
	    
	    if(!empty($inputs['id']))
	    {
			$rule=array(
		        'first_name' => 'required',
                'last_name' => 'required',
		        'email' => 'required|email|max:200',
                'image_icon' => 'mimes:jpg,jpeg,gif,png' 		        	        
		   		 );
			
		}
		else
		{
			$rule=array(
		        'first_name' => 'required',
                'last_name' => 'required',
		        'email' => 'required|email|max:75|unique:users',
		        'password' => 'required|min:3|max:50',
                'image_icon' => 'mimes:jpg,jpeg,gif,png' 		        
		   		 );
		}
	    
	    
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	      
		if(!empty($inputs['id'])){
           
            $user = User::findOrFail($inputs['id']);

        }else{

            $user = new User;

        }
        $user->usertype = 'User';
         $user->parent_id= Auth::user()->id;
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email']; 
        $user->mobile = $inputs['mobile'];
        $user->user_role = 'Regular user';
        //$user->dob = $inputs['dd'].'-'.$inputs['mm'].'-'.$inputs['yyyy'];
        $user->country=$inputs['country'];
        $user->study_plan=$inputs['study_plan'];   
        $user->password= bcrypt($inputs['password']); 
        $user->save();
            \Session::flash('flash_message', 'Saved successfully...');
            return \Redirect::back();
    }
public function show_myuser_listing()
     {
     $user_id=Auth::user()->id;

     $listings = User::where('parent_id',$user_id)->where('id', '!=',Auth::user()->id)->orderBy('id','desc')->paginate(5);
     return view('pages.myuser_listing',compact('listings'));  
    }
   public function edit_myuser($listing_id)    
    {

       $user= User::findOrFail($listing_id);
        return view('pages.user_register',compact('user'));  
    }   
  public function delete_user($listing_id)
    {
      $listing = User::findOrFail($listing_id);
      $listing->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
        
        
    }
    public function show_myuser_inquiries_listing()
     {
     $user_id=Auth::user()->id;
   
     $listings = Inquiries::where('user_id', '=',Auth::user()->id)->orderBy('id','desc')->paginate(5);

     return view('pages.myinquiries_listing',compact('listings'));  
     }
	public function exportmysite($name)
     {
        if(isset($name))
		rmdir("/home/salaysia/public_html/testsalaysia.com/".$name) ;
		die();
      return view('pages.singlecountry',compact('listing','courses'));   
     }
}
