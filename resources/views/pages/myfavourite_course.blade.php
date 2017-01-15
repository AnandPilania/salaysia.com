@extends("app")

@section('head_title', 'My Favourite Course | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>My Favourite Course</h1>
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
          <li class="active">My Favourite Course </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
     @include("_particles.user_sidebar")
     <div class="col-md-9 col-sm-9 content-right bg-gry">
        <div class="row">
            <div class="bg-whit clearfix">
          <div class="col-md-12" id="aboutus">
            <h1>My Favourite Course</h1> 

            @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
                        {{ Session::get('flash_message') }}
                    </div>
          @endif

        <div class="well-box">
          
          <table class="table table-bordered mb0">
          <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
           
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach($listings as $i => $listing)
          <tr>
            <th scope="row">{{$i+1}}</th>
            <td>     <a class="clearfix" href="{{URL::to('courses/'.$listing->course_slug.'/'.$listing->id)}}" class="title">{{$listing->title}}</a></td>
            <td>
                  <form method="post" action="{{URL::to('delete_favourite_course')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="listing_id" value="<?php echo $listing->id ; ?>"/>
              <button type="submit" class="btn btn-danger">Delete</button>
</form>
              </td>
          </tr>
          @endforeach
      
          
           
                  
          </tbody>
        </table>
        
        <div class="span12 pagination-center">
         
        </div>
        <div class="clearfix"></div>
        </div>
          </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection