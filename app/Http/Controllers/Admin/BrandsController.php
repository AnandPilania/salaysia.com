<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Brands;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class BrandsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function brands()    { 
        
        
        $listings = DB::table('brands')->get();

       // $listings = Listings::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
 
         
        return view('admin.pages.brands',compact('listings'));
    }
    

    public function status_listing($listing_id,$status)
    {


        if(Auth::User()->usertype=="Admin")
        {
            
            $listing = Brands::findOrFail($listing_id);
 
            
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
      
    public function delete($listing_id)
    {
        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
            
        $listing = Brands::findOrFail($listing_id);
        
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
