<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Inquiries;
use App\Listings;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class InquiriesController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function index()    { 
        
              
        $Inquiries = Inquiries::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        return view('admin.pages.inquries',compact('Inquiries'));
    }
	public function ViewDetail($id){
        $Inquiries = Inquiries::findOrFail($id);
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        return view('admin.pages.InquiriesDetail',compact('Inquiries'));
    }
	
	
	public function exportdata(){

		$result = Inquiries::orderBy('id')->get();
		//echo "<pre>";print_r($result);die();
		header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=inquiries.xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		 echo "First Name" . "\t"."Last Name" . "\t"."Email" . "\t"."Mobile" . "\t"."Application for" . "\t"."Study Level" . "\t"."Plan to Study" . "\t"."Preffer Time To Speak" . "\t";
		print("\n");
		foreach($result as $row){
        $schema_insert = "";      
			$schema_insert .= $row->firstname ."\t";
			$schema_insert .= $row->lastname ."\t";
			$schema_insert .= $row->email ."\t";
			$schema_insert .= $row->mobile ."\t";
			foreach(Listings::where('id',$row->uni_id)->get() as $uni){
			$schema_insert .= $uni->title ."\t";
			}
			$schema_insert .= $row->level ."\t";
			$schema_insert .= $row->monthRange ."\t";
			$schema_insert .= $row->timeOptionId ."\t";
		
		$schema_insert = str_replace("\t"."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
		}
		die(); 
	}
	
}
