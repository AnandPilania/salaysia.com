<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Location;
use App\Fees;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class FeesController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function index()    { 
        
              
        $fees = Fees::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        return view('admin.pages.fees',compact('fees'));
    }
	

    public function add()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
		
        return view('admin.pages.addeditfees');
    }
	
	public function edit($id)    
		{     
		
			  if(Auth::User()->usertype!="Admin"){

				\Session::flash('flash_message', 'Access denied!');

				return redirect('admin/dashboard');
				
			}
					 
			  $location = Fees::findOrFail($id);
			  
			   

			  return view('admin.pages.addeditfees',compact('location'));
			
		}   
    public function addnew(Request $request)
		{ 
			
			$data =  \Input::except(array('_token')) ;
			
			$rule=array(
					'fees' => 'required'                
					 );
			
			 $validator = \Validator::make($data,$rule);
	 
			if ($validator->fails())
			{
					return redirect()->back()->withErrors($validator->messages());
			} 
			$inputs = $request->all();
			
			if(!empty($inputs['id'])){
			   
				$fees = Fees::findOrFail($inputs['id']);

			}else{

				$fees = new Fees;

			}
			
			
			/*if($inputs['slug']=="")
			{
				$slug = str_slug($inputs['slug'], "-");
			}
			else
			{
				$slug =str_slug($inputs['slug'], "-"); 
			}
			*/
			$fees->fees = $inputs['fees']; 
			 
			
			 
			$fees->save();
			
			if(!empty($inputs['id'])){

				\Session::flash('flash_message', 'Changes Saved');

				return \Redirect::back();
			}else{

				\Session::flash('flash_message', 'Added');

				return \Redirect::back();

			}            
			
			 
		}     
   
    
   	 
    
    public function delete($location_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
        	
        $location = Fees::findOrFail($location_id);
        $location->delete();

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
