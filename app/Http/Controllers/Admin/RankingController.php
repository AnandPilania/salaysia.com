<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Location;
use App\Ranking;
use App\RankType;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class RankingController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function index()    { 
        
              
        $ranking = Ranking::orderBy('title')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
		
        return view('admin.pages.ranking',compact('ranking'));
    }
	

    public function add()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
		$ranktype = RankType::orderBy('title')->get();
        return view('admin.pages.addeditranking',compact('ranktype'));
    }
	
	public function edit($id)    
		{     
		
			  if(Auth::User()->usertype!="Admin"){

				\Session::flash('flash_message', 'Access denied!');

				return redirect('admin/dashboard');
				
			}
					 
			  $location = Ranking::findOrFail($id);
			  
			   
			$ranktype = RankType::orderBy('title')->get();
			  return view('admin.pages.addeditranking',compact('ranktype','location'));
			
		}   
    public function addnew(Request $request)
		{ 
			
			$data =  \Input::except(array('_token')) ;
			
			$rule=array(
					'rank_min' => 'required',              
					'rank_max' => 'required'                
					 );
			
			 $validator = \Validator::make($data,$rule);
	 
			if ($validator->fails())
			{
					return redirect()->back()->withErrors($validator->messages());
			} 
			$inputs = $request->all();
			
			if(!empty($inputs['id'])){
			   
				$ranking = Ranking::findOrFail($inputs['id']);

			}else{

				$ranking = new Ranking;

			}
			
			
			$ranking->rank_id = $inputs['rank_id']; 
			$ranking->rank_min = $inputs['rank_min']; 
			$ranking->rank_max = $inputs['rank_max']; 
			 
			
			 
			$ranking->save();
			
			if(!empty($inputs['id'])){

				\Session::flash('flash_message', 'Changes Saved');

				return \Redirect::back();
			}else{

				\Session::flash('flash_message', 'Added');

				return \Redirect::back();

			}            
			
			 
		}     
   
    public function ajax_ranking($id)    { 
        
        //$cat_id = \Input::get('cat_id');
              
        $rank = Ranking::where('rank_id',$id)->get();
		
		//print_r($rank);die();
		if(isset($rank[0])){
			$rank_min = $rank[0]->rank_min;
			$rank_max = $rank[0]->rank_max;
		}else{
			$rank_min = 0;	
			$rank_max = 0;	
		}

        return view('admin.pages.ajax_ranking',compact('rank_min','rank_max'));
    }
   	 
    
    public function delete($location_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
        	
        $location = Ranking::findOrFail($location_id);
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
