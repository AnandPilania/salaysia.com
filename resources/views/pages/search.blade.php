@extends('app')
@section('head_title', 'Search Listings | '.getcong('site_name') )
@section('head_url', Request::url())
@section('content')
<section class="body-start">

	<div class="container">
 @include("_particles.slider_search")
	<p class="heading-fulpage" style="color:white;"><?php if(isset($listings)) { echo count($listings); }else{ echo '0' ;} ?> Results In Your Search</p>
	</div>	
</section>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Search</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
  
<!--  @include("_particles.sidebar")     -->

 <div class="col-md-9 col-sm-8">
        <div class="row">
<?php if(isset($listings)) {  if(count($listings)==0){ echo '<h1>Please refine your search no records found!!</h1>' ; } } ?>
          @if(isset($listings))
          @foreach($listings as $listing) 
          <div class="col-md-4 vendor-box">
            <div class="vendor-image"> <a href="{{URL::to('courses/'.$listing->course_slug.'/'.$listing->id)}}"><img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive"></a>
               
            </div>
            <div class="vendor-detail">
              <div class="caption">
                <h2><a href="{{URL::to('courses/'.$listing->course_slug.'/'.$listing->id)}}" class="title">{{$listing->title}}</a></h2>
                <p class="location" style="min-height:42px;">{{str_limit($listing->description,150)}}</p>

              </div>
              
              <div class="clearfix"></div>
            </div>
          </div>
          @endforeach

         @else
<h1>Please refine your search no records found!!</h1>
@endif
            
        </div>
      </div>
    </div>
  </div>
</div>

 
@endsection