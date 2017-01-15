<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Testimonials;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class TestimonialsController extends Controller
{

    public function testimonials()    { 
        
        
        $listings = DB::table('testimonials')->get();

       // $listings = Listings::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.testimonials',compact('listings'));
    }
    

    public function status_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Testimonials::findOrFail($listing_id);
 
            
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
      public function add_testimonial()    { 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        return view('admin.pages.addedittestimonial');
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
           
            $listings = Testimonials::findOrFail($inputs['id']);

        }else{

            $listings = new Testimonials;

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
        $listings->testimonial_slug = $listing_slug;
        $listings->description = $inputs['description'];
        $listings->auther_name= $inputs['author_name'];
        $listings->save();
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Testimonial Added');

            return \Redirect::back();

        }            
        
         
    }     
    public function edittestimonial($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Testimonials::findOrFail($listing_id);
            
          


          return view('admin.pages.addedittestimonial',compact('listing'));
        
    }	
    
    public function delete($listing_id)
    {
        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
            
        $listing = Testimonials::findOrFail($listing_id);
        
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
     
    	
}
