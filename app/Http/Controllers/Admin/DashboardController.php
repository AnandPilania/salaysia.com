<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Listings;
use App\Courses;
use App\Posts;
use App\Brands;
 
use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
         
    }
    public function index()
    { 
    	 if(Auth::user()->usertype=='Admin')	
          {  
        		$brands = Brands::count(); 
        		$services = Posts::count(); 
        	 	$courses = Courses::count(); 
        	 	$users = User::where('usertype', 'User')->count();
                        $universities = Listings::count();   

            return view('admin.pages.dashboard',compact('services','courses','users','universities','brands'));

	      }
   
    	
        
    }
	
	 
    	
}
