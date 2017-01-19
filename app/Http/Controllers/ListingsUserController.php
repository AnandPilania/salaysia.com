<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Listings;
use App\Categories;
use App\SubCategories;
use App\Courses;
use App\Location;
use App\ListingGallery;
use App\Reviews;
use App\ListingCourses;
use App\ListingsRank;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;
use App;

class ListingsUserController extends Controller
{
	 
    public function listings(Request $request)    { 
        
              
        $listings = Listings::where('status','1')->orderBy('id','desc')->paginate(9);
 

        $listings->setPath($request->url());

         
        return view('pages.products',compact('listings'));
    }

    public function single_listing($listing_slug,$listing_id)    { 
        
        $listing = Listings::where(array('status'=>'1','id'=>$listing_id))->first();
        //$courses=ListingCourses::where('listing_id',$listing_id)->get();
     
        $view_count=$listing->view_count+1;

Listings::where('id','=',$listing_id)->update(['view_count'=>$view_count]);
 $listing = Listings::where(array('status'=>'1','id'=>$listing_id))->first();
        $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->select('courses.*')->where('listing_courses.listing_id',$listing_id)
                           ->get();
$listing_reviews = Reviews::where('listing_id',$listing_id)->orderBy('id','desc')->get();
$listing_gallery_images = ListingGallery::where('listing_id',$listing_id)->orderBy('id')->get();
        return view('pages.singleuniversity',compact('listing','courses','listing_reviews','listing_gallery_images'));
    }

    public function search_by_subject()
    {

        $listings = Courses::orderBy('category')->paginate(10); 
        $total_res=count($listings);
        return view('pages.search',compact('listings','total_res','keyword'));
    }

    public function search_by_destination()
    {

        $listings = Courses::orderBy('location')->paginate(10); 
        $total_res=count($listings);
        return view('pages.search',compact('listings','total_res','keyword'));
    }

    public function search_by_university()
    {

        $listings = Courses::orderBy('level')->paginate(10); 
        $total_res=count($listings);
        return view('pages.search',compact('listings','total_res','keyword'));
    }
    public function search_listings(Request $request)    
    { 
        
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();
       $inputs = $request->all();
       $category = $inputs['category'];
       $location = $inputs['location'];
       $level = $inputs['level'];
       //$country = $inputs['country'];
       
       //Just search in cources !            

       if(($category == '' || $category == 'all')&&($level == '' || $level == 'all')&&($location == '' || $location == 'all'))
       {
            $listings = Courses::paginate(10);            
       }elseif(($category == '' || $category == 'all')&&($level == '' || $level == 'all')){
            $listings = Courses::where('location','like','%'.$location.'%')->paginate(10);
       }elseif(($category == '' || $category == 'all')&&($location == '' || $location == 'all')){
            $listings = Courses::where('level','like','%'.$level.'%')->paginate(10);
       }elseif(($level == '' || $level == 'all')&&($location == '' || $location == 'all')){
            $listings = Courses::where('category','like','%'.$category.'%')->paginate(10);
       }elseif(($category == '' || $category == 'all')){
            $listings = Courses::where('level','like','%'.$level.'%')
                    ->where('location','like','%'.$location.'%')->paginate(10);
       }elseif(($level == '' || $level == 'all')){
            $listings = Courses::where('category','like','%'.$category.'%')
                    ->where('location','like','%'.$location.'%')->paginate(10);
       }elseif(($location == '' || $location == 'all')){
            $listings = Courses::where('category','like','%'.$category.'%')
                    ->where('level','like','%'.$level.'%')->paginate(10);
       }else{
            $listings = Courses::where('category','like','%'.$category.'%')
                    ->where('level','like','%'.$level.'%')
                    ->where('location','like','%'.$location.'%')->paginate(10);
       }
         $total_res=count($listings);
        return view('pages.search',compact('listings','total_res','keyword'));
    }

     public function live_search(Request $request)    
    { //ajax preload for the courses so that the user can select a spesefic course directly !!
      //We should search in all list using the new param 
      //Seach by course for now, while we need to filter as well 
       $inputs = $request->all();
       $query = $inputs['query'];
       $category = $inputs['category'];
       $location = $inputs['location'];
       $level = $inputs['level'];
       //do final filter

       if(($category == '' || $category == 'all')&&($level == '' || $level == 'all')&&($location == '' || $location == 'all'))
       {
            $listings = Courses::where('title','like','%'.$query.'%')->get();            
       }elseif(($category == '' || $category == 'all')&&($level == '' || $level == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('location','like','%'.$location.'%')->get();
       }elseif(($category == '' || $category == 'all')&&($location == '' || $location == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('level','like','%'.$level.'%')->get();
       }elseif(($level == '' || $level == 'all')&&($location == '' || $location == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('category','like','%'.$category.'%')->get();
       }elseif(($category == '' || $category == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('level','like','%'.$level.'%')
                        ->where('location','like','%'.$location.'%')->get();
       }elseif(($level == '' || $level == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('category','like','%'.$category.'%')
                        ->where('location','like','%'.$location.'%')->get();
       }elseif(($location == '' || $location == 'all')){
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('category','like','%'.$category.'%')
                        ->where('level','like','%'.$level.'%')->get();
       }else{
            $listings = Courses::where('title','like','%'.$query.'%')
                        ->where('category','like','%'.$category.'%')
                        ->where('level','like','%'.$level.'%')
                        ->where('location','like','%'.$location.'%')->get();
       }

        return $listings;//return courses as json response !!
    }

    public function search_filter_listings(Request $request)    
    { 
        
              
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();
        $inputs = $request->all();

       $category = $inputs['category'];
       
       if(isset($inputs['rating']))
       {

            $rating = $inputs['rating'];

       }
       else
       {

        $rating = '';

       }
       

       //$listings = Listings::where(array('title'=>$keyword,'location_id'=>$location))->get();

       $listings = Listings::SearchByFilter($category,$rating)->get();

       $total_res=count($listings);  
         
        return view('pages.search_filter',compact('listings','total_res','category'));
    }

    public function user_listings(Request $request)    { 
        
       if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $user_id= Auth::User()->id;

        $listings = Listings::where('user_id',$user_id)->orderBy('id')->paginate(10);
        
        $listings->setPath($request->url());

        return view('pages.mylisting',compact('listings'));
    }
    
    public function add_product()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $categories = Categories::orderBy('category_name')->get();
        $locations = Location::orderBy('location_name')->get();
        $courses=Courses::orderBy('id')->get();

        return view('admin.pages.addedituniversity',compact('categories','locations','courses'));
    }
      public function add_university()    { 
         if(!Auth::check())
       {
            \Session::flash('flash_message', 'Access denied!');
             return redirect('login');
        }
        $categories = Categories::orderBy('category_name')->get();
        $locations = Location::orderBy('location_name')->get();
        $courses=Courses::orderBy('id')->get();
        return view('pages.add_university_front',compact('categories','locations','courses'));
    }
      public function submit_listing()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $categories = Categories::orderBy('category_name')->get();

        $locations = Location::orderBy('location_name')->get();

        return view('pages.addedituniversity',compact('categories','locations'));
    }
       public function submit_listingfront()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $categories = Categories::orderBy('category_name')->get();

        $locations = Location::orderBy('location_name')->get();
         $courses=Courses::orderBy('id')->get();

        return view('pages.add_university_front',compact('categories','locations','courses'));
    }
    public function addnew(Request $request)
    { 
       
     
        $data =  \Input::except(array('_token')) ;
        $rule=array(
                'title' => 'required',
                'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $listings = Listings::findOrFail($inputs['id']);

        }else{

            $listings = new Listings;

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

        if(empty($inputs['id'])){
           
            $listings->user_id = Auth::User()->id;

        } 

//        $listings->cat_id = $inputs['category'];
//        $listings->sub_cat_id = $inputs['sub_category'];
        //$listings->location_id = $inputs['location']; 
        $listings->title = $inputs['title']; 
        $listings->listing_slug = $listing_slug;
        $listings->description = $inputs['description'];
        $listings->country = $inputs['country'];
        $listings->city = implode(',',$inputs['city']);
        $listings->contact_details = $inputs['contact_details'];
        $listings->address = $inputs['address'];
	if(!empty($inputs['specialization']))
		$listings->specialization= implode(',',$inputs['specialization']);
	if(empty($inputs['level'])){
		$listings->level= '';
	}else{
		$listings->level= implode(',',$inputs['level']);
	}
        $listings->ranking= implode(',',$inputs['ranking']);
        $listings->scolarship= $inputs['scolarship'];

        $listings->map_lat = $inputs['latitude'];
        $listings->map_long = $inputs['lontgitude'];

        $listings->welcome_content=$inputs['welcome_content'];
        $listings->campus_content=$inputs['campus_content'];
        $listings->academic_content=$inputs['academic_content'];
        $listings->research_content=$inputs['research_content'];
        $listings->admissions_content=$inputs['admissions_content'];
        $listings->facilities_content=$inputs['facilities_content'];
        $listings->accommodation_content=$inputs['accommodation_content'];

        /// $listings->working_hours_mon = $inputs['working_hours_mon'];
       // $listings->working_hours_tue = $inputs['working_hours_tue'];
       //  $listings->working_hours_wed = $inputs['working_hours_wed'];
       //  $listings->working_hours_thurs = $inputs['working_hours_thurs'];
      //  $listings->working_hours_fri = $inputs['working_hours_fri'];
      //  $listings->working_hours_sat = $inputs['working_hours_sat'];
      //  $listings->working_hours_sun = $inputs['working_hours_sun'];
        $listings->video = $inputs['video'];
        $listings->video2 = $inputs['video2'];
        $listings->video3 = $inputs['video3'];
        $listings->amenities = $inputs['amenities'];
          
        $listings->save();
       //add courses
        $addcourses=$request['courses'];
        $djfh= ListingCourses::where('listing_id',$listings->id)->count();
        if($djfh>0){
         $listing_course_del=ListingCourses::where('listing_id',$listings->id)->delete(); 
        }
        foreach($addcourses as $addcourse) 
        {
            $listing_course_obj = new ListingCourses;
            $listing_course_obj->listing_id = $listings->id;
            $listing_course_obj->course_id = $addcourse;
            $listing_course_obj->save();
          
        }
		//add ranking
        $ranktype=$request['ranktype'];
        $djfh= ListingsRank::where('listing_id',$listings->id)->count();
        if($djfh>0){
         $listing_course_del=ListingsRank::where('listing_id',$listings->id)->delete(); 
        }
		$i=0;
        foreach($ranktype as $addrank) 
        {
            $listing_rank_obj = new ListingsRank;
            $listing_rank_obj->listing_id = $listings->id;
            $listing_rank_obj->ranktype = $addrank;
            $listing_rank_obj->ranking = $request['ranking'][$i];
            $listing_rank_obj->save();
          
        $i++;
		}
		
         //News Gallery image
        $listing_gallery_files = $request->file('gallery_file');
        
        $file_count = count($listing_gallery_files);
         
        if($request->hasFile('gallery_file'))
        {

            if(!empty($inputs['id']))
            {

                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    $listing_gallery_obj->listing_id = $inputs['id'];
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }

            }
            else
            {   
                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    
                    $listing_gallery_obj->listing_id = $listings->id;
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }
            }
        }

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'University Added');

            return \Redirect::back();

        }            
        
         
    } 
     public function addnewfront(Request $request)
    { 
       
     
        $data =  \Input::except(array('_token')) ;
        $rule=array(
                'title' => 'required',
                'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $listings = Listings::findOrFail($inputs['id']);

        }else{

            $listings = new Listings;

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

        if(empty($inputs['id'])){
           
            $listings->user_id = Auth::User()->id;

        } 

//        $listings->cat_id = $inputs['category'];
//        $listings->sub_cat_id = $inputs['sub_category'];
        //$listings->location_id = $inputs['location']; 
        $listings->title = $inputs['title']; 
        $listings->listing_slug = $listing_slug;
        $listings->description = $inputs['description'];
        $listings->country = $inputs['country'];
        $listings->address = $inputs['address'];
        $listings->specialization= $inputs['specialization'];
        $listings->level= $inputs['level'];
 $listings->ranking= $inputs['ranking'];
        $listings->scolarship= $inputs['scolarship'];
        $listings->map_lat = $inputs['latitude'];
         $listings->map_long = $inputs['lontgitude'];
 $listings->welcome_content=$inputs['welcome_content'];
        $listings->campus_content=$inputs['campus_content'];
        $listings->academic_content=$inputs['academic_content'];
        $listings->research_content=$inputs['research_content'];
        $listings->admissions_content=$inputs['admissions_content'];
        $listings->facilities_content=$inputs['facilities_content'];
        $listings->accommodation_content=$inputs['accommodation_content'];
        /// $listings->working_hours_mon = $inputs['working_hours_mon'];
       // $listings->working_hours_tue = $inputs['working_hours_tue'];
       //  $listings->working_hours_wed = $inputs['working_hours_wed'];
       //  $listings->working_hours_thurs = $inputs['working_hours_thurs'];
      //  $listings->working_hours_fri = $inputs['working_hours_fri'];
      //  $listings->working_hours_sat = $inputs['working_hours_sat'];
      //  $listings->working_hours_sun = $inputs['working_hours_sun'];
        $listings->video = $inputs['video'];
$listings->video2 = $inputs['video2'];
$listings->video3 = $inputs['video3'];
        $listings->amenities = $inputs['amenities'];
          
        $listings->save();
       //add courses
        $addcourses=$request['courses'];
        $djfh= ListingCourses::where('listing_id',$listings->id)->count();
        if($djfh>0){
         $listing_course_del=ListingCourses::where('listing_id',$listings->id)->delete(); 
        }
        foreach($addcourses as $addcourse) 
        {
            $listing_course_obj = new ListingCourses;
            $listing_course_obj->listing_id = $listings->id;
            $listing_course_obj->course_id = $addcourse;
            $listing_course_obj->save();
          
        }
         //News Gallery image
        $listing_gallery_files = $request->file('gallery_file');
        
        $file_count = count($listing_gallery_files);
         
        if($request->hasFile('gallery_file'))
        {

            if(!empty($inputs['id']))
            {

                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    $listing_gallery_obj->listing_id = $inputs['id'];
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }

            }
            else
            {   
                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    
                    $listing_gallery_obj->listing_id = $listings->id;
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }
            }
        }

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'University Added');

            return \Redirect::back();

        }            
        
         
    } 
    public function editproduct($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Listings::findOrFail($listing_id);
            
           if($listing->user_id!=Auth::User()->id and Auth::User()->usertype!="Admin")
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('dashboard');
            
             }

          
          $categories = Categories::orderBy('category_name')->get(); 

          $subcategories = SubCategories::where('cat_id',$listing->cat_id)->orderBy('sub_category_name')->get();

          $locations = Location::orderBy('location_name')->get();

          $listing_gallery_images = ListingGallery::where('listing_id',$listing->id)->orderBy('image_name')->get();
          $courses=Courses::orderBy('id')->get();
          $addedcourses=ListingCourses::where('listing_id',$listing->id)->get();
          return view('admin.pages.addedituniversity',compact('listing','categories','subcategories','locations','listing_gallery_images','courses','addedcourses'));
        
    }	
    
    public function editlisting($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Listings::findOrFail($listing_id);
            
           if($listing->user_id!=Auth::User()->id and Auth::User()->usertype!="Admin")
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('dashboard');
            
             }

          
          $categories = Categories::orderBy('category_name')->get(); 

          $subcategories = SubCategories::where('cat_id',$listing->cat_id)->orderBy('sub_category_name')->get();

          $locations = Location::orderBy('location_name')->get();

          $listing_gallery_images = ListingGallery::where('listing_id',$listing->id)->orderBy('image_name')->get();


          return view('pages.addedituniversity',compact('listing','categories','subcategories','locations','listing_gallery_images'));
        
    }	 
     public function editlistingfront($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Listings::findOrFail($listing_id);
            
           if($listing->user_id!=Auth::User()->id and Auth::User()->usertype!="Admin")
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('dashboard');
            
             }

          
          $categories = Categories::orderBy('category_name')->get(); 

          $subcategories = SubCategories::where('cat_id',$listing->cat_id)->orderBy('sub_category_name')->get();

          $locations = Location::orderBy('location_name')->get();

          $listing_gallery_images = ListingGallery::where('listing_id',$listing->id)->orderBy('image_name')->get();
          $courses=Courses::orderBy('id')->get();
          $addedcourses=ListingCourses::where('listing_id',$listing->id)->get();

          return view('pages.add_university_front',compact('listing','categories','subcategories','locations','listing_gallery_images','courses','addedcourses'));
        
    }	
    public function delete($listing_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="User")
        {
        	
        $listing = Listings::findOrFail($listing_id);
        

        $listing_gallery_obj = ListingGallery::where('listing_id',$listing->id)->get();
        
        foreach ($listing_gallery_obj as $listing_gallery) {
            
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            
            $listing_gallery_del = ListingGallery::findOrFail($listing_gallery->id);
            $listing_gallery_del->delete(); 

            
        }   

        
        \File::delete(public_path() .'/upload/listings/'.$listing->featured_image.'-b.jpg');
        \File::delete(public_path() .'/upload/listings/'.$listing->featured_image.'-s.jpg');    

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

    public function gallery_image_delete($id)
    {
        
        $listing_gallery_obj = ListingGallery::findOrFail($id);
        
        \File::delete('upload/gallery/'.$listing_gallery_obj->image_name);
         
        $listing_gallery_obj->delete(); 

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
     
    public function ajax_featureuniversities($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $universities= Listings::where(array('status'=>1,'featured_listing'=>1))->get();
         }else{

        $universities = Listings::where(array('country'=>$cat_id,'status'=>1,'featured_listing'=>1))->get();
            }
         
        return view('pages.ajax_featureuniversities',compact('universities'));
    } 
 public function ajax_sortfeatureuniversities($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $universities= Listings::where(array('status'=>1,'featured_listing'=>1))->get();
         }
       if($cat_id=='Rankings'){

        $universities = Listings::where(array('status'=>1,'featured_listing'=>1))->orderBy('ranking', 'DESC')->get();
            }
        if($cat_id=='Popularty'){

        $universities = Listings::where(array('status'=>1,'featured_listing'=>1))->orderBy('view_count', 'DESC')->get();
            }
        if($cat_id=='Reviews'){

        $universities = Listings::where(array('status'=>1,'featured_listing'=>1))->orderBy('review_avg', 'DESC')->get();
            }
         if($cat_id=='Scolarship Available'){

        $universities = Listings::where(array('scolarship'=>'yes','status'=>1,'featured_listing'=>1))->get();
            }
         
        return view('pages.ajax_featureuniversities',compact('universities'));
    }
 public function ajax_universities($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $universities= Listings::where(array('status'=>1))->get();
         }else{

        $universities = Listings::where(array('country'=>$cat_id,'status'=>1))->get();
            }
         
        return view('pages.ajax_universities',compact('universities'));
    }
 public function ajax_sortuniversities($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              if($cat_id=='all'){

        $universities= Listings::where(array('status'=>1))->get();
         }
       if($cat_id=='Rankings'){

        $universities = Listings::where(array('status'=>1))->orderBy('ranking', 'DESC')->get();
            }
        if($cat_id=='Popularty'){

        $universities = Listings::where(array('status'=>1))->orderBy('view_count', 'DESC')->get();
            }
        if($cat_id=='Reviews'){

        $universities = Listings::where(array('status'=>1))->orderBy('review_avg', 'DESC')->get();
            }
         if($cat_id=='Scolarship Available'){

        $universities = Listings::where(array('scolarship'=>'yes','status'=>1))->get();
            }
        return view('pages.ajax_universities',compact('universities'));
    }

    public function submit_review(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'rating' => 'required'                
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
    
        $review = new Reviews;

      
        $review->user_id = Auth::User()->id;
        $review->listing_id = $inputs['listing_id'];
        $review->reviews_title = $inputs['reviews_title']; 
        $review->review = $inputs['review']; 
        $review->rating = $inputs['rating']; 
        $review->date= strtotime(date('Y-m-d'));  
          
        $review->save();

        $total_avg=round(DB::table('listings_reviews')->where('listing_id', $inputs['listing_id'])->avg('rating'));

        $listing_obj = Listings::findOrFail($inputs['listing_id']);

        $listing_obj->review_avg = $total_avg;  
        $listing_obj->save(); 
        
        
            \Session::flash('flash_message', 'Review submitted');

            return \Redirect::back();
                   
        
         
    }
    
    public function inquiry_send(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(                
                'name' => 'required',
                'email' => 'required|email|max:75'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
            $data = array(
            'name' => $inputs['name'],
            'email' => $inputs['email'],           
            'phone' => $inputs['phone'],
            'user_message' => $inputs['message'],
             );

            $subject=$inputs['subject'];

            $contact_email=$inputs['contact_email'];


            \Mail::send('emails.inquiry', $data, function ($message) use ($subject,$contact_email){

                $message->from(getcong('site_email'), getcong('site_name'));

                $message->to($contact_email)->subject($subject);

            });
        

            \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');

            return \Redirect::back();

         
    }    
 public function showfeature_university()
     {
      $universities= Listings::where('featured_listing','1')->orderBy('id','desc')->paginate(5);
      return view('pages.feature_university',compact('universities'));   
     }
      public function showall_university()
     {
      $universities= Listings::where('status','1')->orderBy('id','desc')->paginate(5);

   
      return view('pages.universities',compact('universities'));   
     }
   public function showffavourite_university()
     {
    $user_id=Auth::user()->id;
     $listings = DB::table('listings')
                           ->leftJoin('listings_favourite_university', 'listings.id', '=', 'listings_favourite_university.listing_id')
                           ->select('listings.*')->where('listings_favourite_university.user_id',$user_id)
                           ->get();

      return view('pages.myfavourite_university',compact('listings'));  
    }
   public function showffavourite_courses()
     {
     $user_id=Auth::user()->id;
     $listings = DB::table('courses')
                           ->leftJoin('listings_favourite_courses', 'courses.id', '=', 'listings_favourite_courses.listing_id')
                           ->select('courses.*')->where('listings_favourite_courses.user_id',$user_id)
                           ->get();
     return view('pages.myfavourite_course',compact('listings'));  
    }
    
}
