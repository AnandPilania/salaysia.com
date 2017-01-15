<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Countries;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;
use App;

class CountryController extends Controller
{

    public function countries()    { 
        
        
        $listings = DB::table('countries')->get();

       // $listings = Listings::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.countries',compact('listings'));
    }
    

    public function status_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Countries::findOrFail($listing_id);
 
            
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
      public function add_country()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        return view('admin.pages.addeditcountry');
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
           
            $listings = Countries::findOrFail($inputs['id']);

        }else{

            $listings = new Countries;

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
            
            $img->fit(680, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $listings->featured_image = $hardPath;
             
        }
        $listings->title = $inputs['title']; 
        $listings->testimonial_slug = $listing_slug;
        $listings->description = $inputs['description'];
  
        $listings->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Country Added');

            return \Redirect::back();

        }            
        
         
    }     
    public function editcountry($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Countries::findOrFail($listing_id);
            
          


          return view('admin.pages.addeditcountry',compact('listing'));
        
    }	
    
    public function delete($listing_id)
    {
        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
            
        $listing = Countries::findOrFail($listing_id);
        
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
     public function single_country($listing_slug,$listing_id)
     {

        if(App::getLocale()!='en'){
            $listing = DB::table('countries')
                            ->join('countries_trans','countries.id','=','countries_trans.id')
                            ->select('countries.id','countries.featured_image','countries_trans.title',
                                'countries_trans.description')
                            ->where('countries.status','1')
                            ->where('countries.id',$listing_id)
                            ->where('countries.testimonial_slug',$listing_slug)
                            ->where('countries_trans.lang',App::getLocale())
                            ->orderBy('countries.id','desc')->first();
            $courses = DB::table('courses')//we need to update that code please.
                           ->join('courses_trans','courses.id','=','courses_trans.id')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->leftJoin('countries', 'listings.country', '=', 'countries.title')
                           ->select('courses.id','courses.featured_image','courses_trans.title',
                            'courses.course_slug','courses_trans.description')
                           ->where('courses_trans.lang',App::getLocale())
                           ->where('countries.id',$listing_id)->distinct('courses.id')
                           ->get();

        }else{
            $listing=Countries::where(array('status'=>'1','id'=>$listing_id,'testimonial_slug'=>$listing_slug))->orderBy('id',         'desc')->first();
            $courses = DB::table('courses')
                           ->leftJoin('listing_courses', 'courses.id', '=', 'listing_courses.course_id')
                           ->leftJoin('listings', 'listing_courses.listing_id', '=', 'listings.id')
                           ->leftJoin('countries', 'listings.country', '=', 'countries.title')
                           ->select('courses.*')->where('countries.id',$listing_id)->distinct('courses.id')
                           ->get();

        }

         
      return view('pages.singlecountry',compact('listing','courses'));   
     }
	 
     
    	
}
