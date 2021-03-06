<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Categories;
use App\SubCategories;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class SubCategoriesController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function subcategories()    { 
        
              
        //$subcategories = SubCategories::orderBy('sub_category_name')->get();

        $subcategories = DB::table('sub_categories')
                           ->leftJoin('categories', 'sub_categories.cat_id', '=', 'categories.id')
                           ->select('sub_categories.*','categories.category_name')
                           ->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.subcategories',compact('subcategories'));
    }

    public function ajax_subcategories($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              
        $subcategories = SubCategories::where('cat_id',$cat_id)->orderBy('sub_category_name')->get();

         
         
        return view('admin.pages.ajax_subcategories',compact('subcategories'));
    }
    
    public function addeditSubCategory()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        $categories = Categories::orderBy('category_name')->get();
        
        return view('admin.pages.addeditSubCategory',compact('categories'));
    }
    
    public function addnew(Request $request)
    { 
       
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        
                'sub_category_name' => 'required'		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $subcat_obj = SubCategories::findOrFail($inputs['id']);

        }else{

            $subcat_obj = new SubCategories;

        }
		
		
		if($inputs['sub_category_slug']=="")
		{
			$sub_category_slug = str_slug($inputs['sub_category_name'], "-");
		}
		else
		{
			$sub_category_slug =str_slug($inputs['sub_category_slug'], "-"); 
		}
		
		
                $subcat_obj->sub_category_name = $inputs['sub_category_name']; 
		$subcat_obj->sub_category_slug = $sub_category_slug;
		$subcat_obj->description = $inputs['description'];
                
		 //Featured image
        $featured_image = $request->file('featured_image');
        
        if($featured_image){
            \File::delete(public_path() .'/upload/listings/'.$subcat_obj->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/listings/'.$subcat_obj->featured_image.'-s.jpg');
            
            $tmpFilePath = 'upload/listings/';          
             
            $hardPath = substr($sub_category_slug,0,100).'_'.time();
            
            $img = Image::make($featured_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            
            $img->fit(300, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $subcat_obj->featured_image = $hardPath;
           }      
		 
	    $subcat_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editSubCategory($id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          
          $categories = Categories::orderBy('category_name')->get(); 

          $subcat = SubCategories::findOrFail($id);
          
          return view('admin.pages.addeditSubCategory',compact('categories','subcat'));
        
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $sub_cat = SubCategories::findOrFail($id);
        $sub_cat->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
     
    	
}
