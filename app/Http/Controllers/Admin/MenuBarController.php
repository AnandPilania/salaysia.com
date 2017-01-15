<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Location;
use App\MenuBar;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class MenuBarController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function index()    { 
        
              
        $menu = MenuBar::orderBy('id','DESC')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        return view('admin.pages.menu',compact('menu'));
    }
	

    public function add()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
        	      
        }
		$parent_menu = MenuBar::where('parent_id','0')->get();
        return view('admin.pages.addeditmenu',compact('parent_menu'));
    }
	
	public function edit($id)    
		{     
		
			  if(Auth::User()->usertype!="Admin"){

				\Session::flash('flash_message', 'Access denied!');

				return redirect('admin/dashboard');
				
			}
					 
			  $parent_menu = MenuBar::where('parent_id','0')->get();
			  $menuid = MenuBar::findOrFail($id);
			  
			   

			  return view('admin.pages.addeditmenu',compact('menuid','parent_menu'));
			
		}  
	
    public function addnew(Request $request)
		{ 
			
			$data =  \Input::except(array('_token')) ;
			
			$rule=array(
					'title' => 'required'                
					 );
			
			 $validator = \Validator::make($data,$rule);
	 
			if ($validator->fails())
			{
					return redirect()->back()->withErrors($validator->messages());
			} 
			$inputs = $request->all();
			
			if(!empty($inputs['id'])){
			   
				$menu = MenuBar::findOrFail($inputs['id']);

			}else{

				$menu = new MenuBar;

			}
			
			
			if($inputs['slug']=="")
			{
				$slug = str_slug($inputs['title'], "-");
			}
			else
			{
				$slug =str_slug($inputs['slug'], "-"); 
			}
			
			$menu->parent_id = $inputs['parent_id']; 
			$menu->title = $inputs['title']; 
			$menu->slug = $slug; 
			$menu->link = $inputs['link']; 
			$menu->ordering = $inputs['ordering']; 
			 
			
			 
			$menu->save();
			
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
        	
        $location = MenuBar::findOrFail($location_id);
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
