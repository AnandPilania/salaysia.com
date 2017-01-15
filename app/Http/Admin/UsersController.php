<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Listings;
use App\Categories;
use App\SubCategories;
use App\Location;
use App\ListingGallery;
use App\Reviews;
use App\UserPermissions;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class UsersController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
		
		 parent::__construct();
         
    }
    public function userslist()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        } 
          
        $allusers = User::where('id', '!=',Auth::user()->id)->orderBy('id')->get();
       
         
        return view('admin.pages.users',compact('allusers'));
    } 
     
    public function addeditUser()    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          
        return view('admin.pages.addeditUser');
    }
    
public function give_permissions(Request $request)    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         $UserPermissions =new UserPermissions;
         $idcount = UserPermissions::where('user_id',$request->id)->count();
          if($idcount>0){
          $user_id=$request->id;

         DB::table('user_permissions')->where('user_id', $user_id)->update(array('Countries'=> $request->Countries,'Universities'=> $request->Universities,'Courses'=> $request->Courses,'Services'=> $request->Services,'Brands'=> $request->Brands,'Testimonials'=> $request->Testimonials,'Inqueries'=> $request->Inqueries,'Users'=> $request->Users,'Setting'=> $request->Setting));
         return \Redirect::back();
          }else{
         $UserPermissions->Countries = $request->Countries;
         $UserPermissions->Universities= $request->Universities;
         $UserPermissions->Courses= $request->Courses;
         $UserPermissions->Services= $request->Services;
         $UserPermissions->Brands= $request->Brands;
         $UserPermissions->Testimonials= $request->Testimonials;
         $UserPermissions->Inqueries= $request->Inqueries;
         $UserPermissions->Users= $request->Users;
         $UserPermissions->user_id = $request->id;
         $UserPermissions->Setting=$request->Setting;
         $UserPermissions->save();
          return \Redirect::back();
         }
    }
public function permissions($id)    { 
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          $userpermission = UserPermissions::where('user_id',$id)->first();
          $user = User::findOrFail($id);
          return view('admin.pages.add_permissions',compact('user','userpermission'));
    }
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $inputs = $request->all();
	    
	    if(!empty($inputs['id']))
	    {
			$rule=array(
		        'first_name' => 'required',
                'last_name' => 'required',
		        'email' => 'required|email|max:200',
                'image_icon' => 'mimes:jpg,jpeg,gif,png' 		        	        
		   		 );
			
		}
		else
		{
			$rule=array(
		        'first_name' => 'required',
                'last_name' => 'required',
		        'email' => 'required|email|max:75|unique:users',
		        'password' => 'required|min:3|max:50',
                'image_icon' => 'mimes:jpg,jpeg,gif,png' 		        
		   		 );
		}
	    
	    
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	      
		if(!empty($inputs['id'])){
           
            $user = User::findOrFail($inputs['id']);

        }else{

            $user = new User;

        }
		
		//User image
        $user_image = $request->file('image_icon');
         
        if($user_image){
            
           // \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-b.jpg');
           // \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-s.jpg');
            
            $tmpFilePath = 'upload/members/';

            $hardPath =  str_slug($inputs['first_name'], '-').'-'.md5(time());
            
            $img = Image::make($user_image);

            $img->fit(250, 250)->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(80, 80)->save($tmpFilePath.$hardPath. '-s.jpg');

            $user->image_icon = $tmpFilePath.$hardPath.'-b.jpg';
             
        } 
		if($inputs['user_role']=='Editor user')
                {
                 $user->usertype = 'Admin';
                }else{
		     $user->usertype = 'User';
                     }
		$user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->contact_email = $inputs['contact_email'];
        $user->website = $inputs['website'];           
        $user->address = $inputs['address']; 
        $user->country = $inputs['country'];
        $user->user_role = $inputs['user_role'];
        $user->dob = $inputs['dob'];
        $user->facebook_url = $inputs['facebook_url'];
        $user->twitter_url = $inputs['twitter_url'];
        $user->linkedin_url = $inputs['linkedin_url'];
        $user->dribbble_url = $inputs['dribbble_url'];
        $user->instagram_url = $inputs['instagram_url'];       		 
		
		if($inputs['password'])
		{
			$user->password= bcrypt($inputs['password']); 
		}
		
		
		 
	    $user->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editUser($id)    
    {     
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }		
    		     
          $user = User::findOrFail($id);
           
          return view('admin.pages.addeditUser',compact('user'));
        
    }	 
    
    public function delete($id)
    {
    	
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
    		
        $user = User::findOrFail($id);
        

        $listings = Listings::where('user_id',$user->id)->get();
        
        foreach ($listings as $listing_item) {

                $listing_gallery_obj = ListingGallery::where('listing_id',$listing_item->id)->get();
                
                foreach ($listing_gallery_obj as $listing_gallery) {
                    
                    \File::delete('upload/gallery/'.$listing_gallery->image_name);
                    \File::delete('upload/gallery/'.$listing_gallery->image_name);
                    
                    $listing_gallery_del = ListingGallery::findOrFail($listing_gallery->id);
                    $listing_gallery_del->delete(); 

                    
                }  

        $listing_del = Listings::findOrFail($listing_item->id);
        
        \File::delete('upload/listings/'.$listing_item->featured_image.'-b.jpg');
        \File::delete('upload/listings/'.$listing_item->featured_image.'-s.jpg');    

        $listing_del->delete(); 

        } 

         

		\File::delete(public_path() .'/upload/members/'.$user->image_icon.'-b.jpg');
		\File::delete(public_path() .'/upload/members/'.$user->image_icon.'-s.jpg');
			
		$user->delete();
		
        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
    
    public function exportusers(Request $request){
		$inputs = $request->all();
		$userid = implode(',',$inputs['userid']);
		$result = DB::select('SELECT first_name, last_name, email, gender, mobile, contact_email, website, address, dob, country, study_plan, user_role, usertype FROM users WHERE id IN ('.$userid.')');
		
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=users.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
		echo "First Name" . "\t"."Last Name" . "\t"."Email" . "\t"."Gender" . "\t"."Mobile" . "\t"."Contact Email" . "\t"."Website" . "\t"."Address" . "\t"."DOB" . "\t"."Country" . "\t"."Study Plan" . "\t"."User Role" . "\t"."User Type" . "\t";
		print("\n");
		foreach($result as $row){
        $schema_insert = "";      
			$schema_insert .= $row->first_name ."\t";
			$schema_insert .= $row->last_name ."\t";
			$schema_insert .= $row->email ."\t";
			$schema_insert .= $row->gender ."\t";
			$schema_insert .= $row->mobile ."\t";
			$schema_insert .= $row->contact_email ."\t";
			$schema_insert .= $row->website ."\t";
			$schema_insert .= $row->address ."\t";
			$schema_insert .= $row->dob ."\t";
			$schema_insert .= $row->country ."\t";
			$schema_insert .= $row->study_plan ."\t";
			$schema_insert .= $row->user_role ."\t";
			$schema_insert .= $row->usertype ."\t";
		
		$schema_insert = str_replace("\t"."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
		}
		die(); 
	} 
   
    	
}
