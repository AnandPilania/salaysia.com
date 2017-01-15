<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Courses;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;
use App;

class CoursesController extends Controller
{

    public function courses()    { 
        
        
        $listings = DB::table('courses')->get();

       // $listings = Listings::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.courses',compact('listings'));
    }
    

    public function status_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Courses::findOrFail($listing_id);
 
            
            $listing->status = $status;
 
            $listing->save();
         
            \Session::flash('flash_message', 'Status changed');

            return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
             
        }
    }
      public function add_course()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        return view('admin.pages.addeditcourse');
    }
      public function addnew(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'title' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $listings = Courses::findOrFail($inputs['id']);

        }else{

            $listings = new Courses;

        }
        
        $listing_slug = str_slug($inputs['title'], "-");
        
        //Featured image
        $featured_image = $request->file('featured_image');
         
        if($featured_image){
            
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-s.jpg');
            
            $tmpFilePath = 'upload/listings/';          
             
            $hardPath = substr($listing_slug,0,100).'_'.time();
            
            $img = Image::make($featured_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            
            $img->fit(300, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $listings->featured_image = $hardPath;
             
        }
        $listings->title = $inputs['title']; 
        $listings->course_slug = $listing_slug;
        $listings->description = $inputs['description']; 
        $listings->type = $inputs['type']; 
        $listings->start_from = implode(',',$inputs['start_from']); 
        $listings->fees = $inputs['fees']; 
        $listings->feescycle = $inputs['feescycle']; 
        $listings->specialreq = $inputs['specialreq']; 
        $listings->level = implode(',',$inputs['level']); 
        $listings->duration= $inputs['duration'];
        $listings->category= $inputs['Course_Category'];
        $listings->subjects= $inputs['subjects'];
        $listings->location= $inputs['location'];
        $listings->accreditation = $inputs['accreditation'];
        $listings->univ_id= $inputs['univ_id'];
		//echo "<pre>";print_r(implode(',',$inputs['level']));die();
        $listings->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Course Added');

            return \Redirect::back();

        }            
        
         
    }     
    public function editcourse($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Courses::findOrFail($listing_id);
            
          


          return view('admin.pages.addeditcourse',compact('listing'));
        
    }	
    
    public function delete($listing_id)
    {
        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
            
        $listing = Courses::findOrFail($listing_id);
        
        \File::delete('upload/listings/'.$listing->featured_image.'-b.jpg');
        \File::delete('upload/listings/'.$listing->featured_image.'-s.jpg');    

        $listing->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        
        }
    }
    public function showfeature_course()
     {
      $courses= Courses::where('featured_listing','1')->orderBy('id','desc')->paginate(5);
      return view('pages.feature_course',compact('courses'));   
     }

    	public function single_course($listing_slug,$listing_id)
     {
        if(App::getLocale()!='en'){
          $listing= DB::table('courses')
            ->join('courses_trans','courses.id','=','courses_trans.id')
            ->select('courses_trans.title','courses_trans.description','courses_trans.category',
              'courses.featured_image','courses.course_slug','courses.id','courses_trans.level',
              'courses_trans.type','courses.start_from','courses.fees','courses_trans.duration')
            ->where('courses.status','1')
            ->where('courses.id',$listing_id)
            ->where('courses.course_slug',$listing_slug)
            ->where('courses_trans.lang',App::getLocale())
            ->orderBy('courses.id','desc')->first();
            $listing->keyword = "";//bug, it is not exists in DB, so we set it for blade !!
        }else{
          $listing= Courses::where(array('status'=>'1','id'=>$listing_id,'course_slug'=>$listing_slug))->orderBy('id','desc')->first();
        }
      return view('pages.singlecourse',compact('listing'));   
     }

     public function ajax_featurecourses($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $courses= Courses::where(array('status'=>'1','featured_listing'=>1))->get();
         }else{
               $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->select('courses.*')->where('listings.country',$cat_id)
                           ->where('courses.featured_listing',1)
                           ->get();

          if(empty($courses)){ $courses='hello'; }
       
            }
  
        return view('pages.ajax_featurecourses',compact('courses'));
    } 
        public function ajax_sortfeaturecourses($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $courses= Courses::where(array('status'=>'1','featured_listing'=>1))->get();
         }
            if($cat_id=='Rankings'){
              $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->select('courses.*')->where('listings.country',$cat_id)
                           ->where('courses.featured_listing',1)->orderBy('listings.ranking', 'DESC')
                           ->get();
            }
        if($cat_id=='Popularty'){
              $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->select('courses.*')->where('listings.country',$cat_id)
                           ->where('courses.featured_listing',1)->orderBy('listings.view_count', 'DESC')
                           ->get();

            }
        if($cat_id=='Reviews'){
                  $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->select('courses.*')->where('listings.country',$cat_id)
                           ->where('courses.featured_listing',1)->orderBy('listings.review_avg', 'DESC')
                           ->get();
            }
         if($cat_id=='Scolarship Available'){
                          $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->select('courses.*')->where(array('listings.country'=>$cat_id,'listings.scolarship'=>'yes'))
                           ->where('courses.featured_listing',1)
                           ->get();

            }

          if(empty($courses)){ $courses='hello'; }
       
            
  
        return view('pages.ajax_featurecourses',compact('courses'));
        }
    public function add_front_course()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        return view('pages.add_course_front');
    }
       public function addnewcourse_front(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'title' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $listings = Courses::findOrFail($inputs['id']);

        }else{

            $listings = new Courses;

        }
        
        $listing_slug = str_slug($inputs['title'], "-");
        
        //Featured image
        $featured_image = $request->file('featured_image');
         
        if($featured_image){
            
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-s.jpg');
            
            $tmpFilePath = 'upload/listings/';          
             
            $hardPath = substr($listing_slug,0,100).'_'.time();
            
            $img = Image::make($featured_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            
            $img->fit(300, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $listings->featured_image = $hardPath;
             
        }
        $listings->title = $inputs['title']; 
         $listings->user_id= Auth::User()->id ;
        $listings->course_slug = $listing_slug;
        $listings->description = $inputs['description']; 
        $listings->type = $inputs['type']; 
        $listings->start_from = $inputs['start_from']; 
        $listings->fees = $inputs['fees']; 
        $listings->level = $inputs['level']; 
        $listings->duration= $inputs['duration'];
        $listings->category= $inputs['Course_Category'];
        $listings->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Course Added');

            return \Redirect::back();

        }            
        
         
    }
     public function mycourse_front()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        $listings = DB::table('courses')->where('user_id',Auth::User()->id)->paginate(5);
        return view('pages.mycourse_listing',compact('listings'));
    }
  public function edit_front_course($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Courses::findOrFail($listing_id);
            
          


          return view('pages.add_course_front',compact('listing'));
        
    }
      public function delete_front_course($listing_id)
    {
        
            
        $listing = Courses::findOrFail($listing_id);
        
        \File::delete('upload/listings/'.$listing->featured_image.'-b.jpg');
        \File::delete('upload/listings/'.$listing->featured_image.'-s.jpg');    

        $listing->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
       
        
    }
    	
}
