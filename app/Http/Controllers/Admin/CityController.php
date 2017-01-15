<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Countries;
use App\City;
use App\CityGallery;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class CityController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function index()    { 
        
              
        //$subcategories = SubCategories::orderBy('sub_category_name')->get();

        $cities = DB::table('city')
                           ->leftJoin('countries', 'city.country_id', '=', 'countries.id')
                           ->select('city.*','countries.title')
                           ->get();
        
		if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.city',compact('cities'));
    }

    public function ajax_cities($country_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              
        $city = City::where('country_id',$country_id)->orderBy('city_name')->get();

        return view('admin.pages.ajax_city',compact('city'));
    }
    
    public function add()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        $country = Countries::orderBy('title')->get();
        
        return view('admin.pages.addeditcity',compact('country'));
    }
	
    public function edit($id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          
          $country = Countries::orderBy('title')->get(); 
          $cityid = City::findOrFail($id);
          $city_gallery = CityGallery::where('listing_id',$id)->orderBy('id')->get();
		  
          return view('admin.pages.addeditcity',compact('country','cityid','city_gallery'));
        
    }
	
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'country_id' => 'required',
                'city_name' => 'required',		         
		   		'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $city_obj = City::findOrFail($inputs['id']);

        }else{

            $city_obj = new City;

        }
		
		
		if($inputs['slug']=="")
		{
			$slug = str_slug($inputs['city_name'], "-");
		}
		else
		{
			$slug =str_slug($inputs['slug'], "-"); 
		}
		//Featured image
        $featured_image = $request->file('featured_image');
         
        if($featured_image){
            
            \File::delete(public_path() .'/upload/listings/'.$city_obj->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/listings/'.$city_obj->featured_image.'-s.jpg');
            
            $tmpFilePath = 'upload/listings/';          
             
            $hardPath = substr($slug,0,100).'_'.time();
            
            $img = Image::make($featured_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            
            $img->fit(680, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $city_obj->featured_image = $hardPath;
             
        }
		$city_obj->country_id = $inputs['country_id']; 
        $city_obj->city_name = $inputs['city_name']; 
        $city_obj->famous_places = $inputs['famous_places']; 
		$city_obj->slug = $slug;
	    $city_obj->save();
		
		
		
		 //News Gallery image
        $listing_gallery_files = $request->file('gallery_file');
        
        $file_count = count($listing_gallery_files);
         
        if($request->hasFile('gallery_file'))
        {

            if(!empty($inputs['id']))
            {

                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new CityGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
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
                    
                    $listing_gallery_obj = new CityGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    
                    $listing_gallery_obj->listing_id = $city_obj->id;
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }
            }
        }
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $city = City::findOrFail($id);
        $city->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
     
    	
}
