@extends("app")
@section('head_title', 'My inquiries | '.getcong('site_name') )
@section('head_url', Request::url())
@section("content")
 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>My inquiries</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">My inquiries</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      @include("_particles.user_sidebar")
      @if(Auth::user()->user_role=='University user')
     <div class="col-md-9 col-sm-9 content-right bg-gry">
        <div class="row">
            <div class="bg-whit clearfix">
          <div class="col-md-12" id="aboutus">
            <h1>My inquiries</h1> 
            @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                     {{ Session::get('flash_message') }}
                    </div>
          @endif
        <div class="well-box table-responsive">         
          <table class="table table-bordered mb0">
          <thead>
          <tr>
            <th>#</th>
            <th>FirstName</th>
            <th>lastName</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
<?php $i=0; ?>
          @foreach($listings as $i => $listing)
          <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$listing->firstname}}</td>
            <td>{{$listing->lastname}}</td>
            <td>{{$listing->email}}</td>
            <td>
              <button type="button" data-toggle="modal" data-target="#inquires<?php echo $i; ?>" class="contact-inst-btn pull-right">View Detail</button>
             
            </td>
          </tr>
<!-----------modeldetail-------------------->


  <!-- Modal -->
  <div class="modal fade" id="inquires<?php echo $i; ?>" role="dialog">
    <div class="modal-dialog login-salaysia">
    
      <!-- Modal content-->
      <div class="modal-content body-model-login">
        <div class=" text-left">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Detial Of Applicant</h3>
		  <div class="row model-text-deco">
			<div class="col-sm-12">
			<p>FirstName:-<strong>{{$listing->firstname}}</strong></p>
                        <p>LastName:-<strong>{{$listing->lastname}}</strong></p>
                        <p>Mobile:-<strong>{{$listing->countryCode}}-{{$listing->mobile}}</strong></p>
                        <p>Email:-<strong>{{$listing->email}}</strong></p>
                        @foreach(\App\Listings::where('id',$listing->uni_id)->get() as $uni)
                        <p>Application for :-<strong>{{$uni->title}}</strong></p>
                        @endforeach
                        <p>Studylevel:-<strong>{{$listing->level}}</strong></p>
                        <p>Plan to Study:-<strong>{{$listing->monthRange}}</strong></p>
                        <p>Preffer Time To Speak:-<strong>{{$listing->timeOptionId}}</strong></p>
                       
			</div>

		  </div>
        </div>
        
      </div>
      
    </div>
  </div>
<!-----------end modellogin-------------------->
<?php  $i++ ; ?>
          @endforeach              
          </tbody>
        </table>       
        <div class="span12 pagination-center">
          <div class="dataTables_paginate paging_bootstrap pagination">        
            @include('_particles.pagination', ['paginator' => $listings])           
          </div>
        </div>
        <div class="clearfix"></div>
        </div>
          </div>
            </div>
        </div>
      </div>
       @else
 <script>window.location='/dashboard';</script>
 @endif
    </div>
  </div>
</div>
@endsection