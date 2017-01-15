@extends('app')
 @section('head_title', 'Feature Courses' .' | '.getcong('site_name') )    
@section('content')
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script> 
<script type="text/javascript">
    $(document).ready(function(e) {
        $("#country").change(function(){
            var cat=$("#country").val();

            $.ajax({
                type: "GET",
                url: "{{ URL::to('ajax_featurecourses') }}/"+cat, 
                success: function(result){
                    
                    $("#myUL").html(result);
                }
            });
            
        });
       $("#myInput").change(function(){
            var cat=$("#myInput").val();

            $.ajax({
                type: "GET",
                url: "{{ URL::to('ajax_sortfeaturecourses') }}/"+cat,
                success: function(result){
                    
                   $("#myUL").html(result);
                }
            });
            
        });
    });
function divFunction(id){
 $.ajax({
          type: "GET",
          url: "{{ URL::to('ajax_favouritecourses') }}/"+id,
          success: function(result){
           $("#chnimg"+id).removeClass('fa-heart-o');
          $("#chnimg"+id).addClass('fa-heart');
                }
            });
}
</script>
 <section class="body-start">
	<div class="container">
	<div class="homepage-search-max">
	@include("_particles.slider_search")
        </div>
    <div class="homepage-search-min">
 @include("_particles.slider_search")
</div>
	</div>	
</section>

<section class="contact-form-section clearfix">
	<div class="container">
		
			<h2 class="text-red">{{trans('home.featured_courses')}}</h2>
			<p class="text-red">{{trans('home.featured_universities_msg')}}</p>
	
	</div>
</section>

<section class="filter-universities-name">
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="col-sm-3">
			{{trans('home.view_by')}} <i class="fa fa-arrow-right" aria-hidden="true"></i>

			</div>
			<div class="col-sm-6">
				<div class="form-group ">
						 
<select name="country" class=" form-bg" id="country">
@foreach(\App\Countries::orderBy('title')->get() as $country)
 <option value="{{$country->title}}">{{$country->title}}</option>
 @endforeach
</select>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
<select id="myInput">
 <option value="all">{{trans('home.sorted_by')}}</option>
  <option value="Scolarship Available">{{trans('home.scho_ava')}}</option>
  <option value="Rankings">{{trans('home.rankings')}}</option>
  <option value="Popularty">{{trans('home.reviews')}}</option>
  <option value="Reviews">{{trans('home.view_by')}}</option>
  
</select>  
		</div>
	</div>	
</div>
<div class="container">
	<div class="row">
		<ul id="myUL" class="clearfix">
		@foreach($courses as $course) 	
			<li class="clearfix">
			<div class="col-sm-2 noppading">
				<div class="featured-tag">
					<img src="{{ URL::asset('site_assets/images/featured-tag.png') }}"/>
				</div>
				<div class="university-img-logo">
					<img src="{{ URL::asset('upload/listings/'.$course->featured_image.'-s.jpg') }}"/>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="university-description">
					<h4>
                                        <a class="clearfix" href="{{URL::to('courses/'.$course->course_slug.'/'.$course->id)}}" class="title">{{$course->title}}</a>
                                        </h4>
					<p>
					<i class="fa fa-graduation-cap " aria-hidden="true"></i>
                                    {{$course->level}} 
				 
					<i class="fa fa-clock-o" aria-hidden="true"></i> {{$course->type}}
					<i class="fa fa-calendar" aria-hidden="true"></i> START.{{$course->start_from}}
					<i class="fa fa-tag" aria-hidden="true"></i> ${{$course->fees}} per year</p>
                                             <p>{!! str_limit($course->description, $limit = 250) !!}</p>			
                                </div>
			</div>
			<div class="col-sm-3">
				@if(Auth::check())
				<div class="shortlist-block">
				<p class="short-icon"  onClick="divFunction({{$course->id}})">Shortlist <i id="chnimg{{$course->id}}" class="fa @if(\App\FavouriteCourse::where(array('listing_id'=>$course->id,'user_id'=>Auth::user()->id))->count()>0) fa-heart @else fa-heart-o @endif " aria-hidden="true"></i></p>
				</div>
                             @endif
			</div>
			
			</li>
		 @endforeach  	
                 
		</ul>
            {!! $courses->render() !!}
	</div>
</div>
</section>

<section class="red-icons-blogs bg-grey">
	<div class="container">
		<div class="row red-text">
			<div class="col-sm-3">
				<div class="red-clr-images">
				<i class="fa fa-university" aria-hidden="true"></i>

					<h3><strong>{{\App\Listings::where('status',1)->count()}}</strong></h3>
					<h3>{{trans('home.universities')}}</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="red-clr-images">
				<i class="fa fa-book" aria-hidden="true"></i>

					<h3><strong>{{\App\Courses::where('status',1)->count()}}</strong></h3>
					<h3>{{trans('home.courses')}}</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="red-clr-images">
				<i class="fa fa-globe" aria-hidden="true"></i>

					<h3><strong>{{\App\Countries::where('status',1)->count()}}</strong></h3>
					<h3>{{trans('home.countries')}}</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="red-clr-images">
				<i class="fa fa-users" aria-hidden="true"></i>

					<h3><strong>{{\App\User::where('usertype','User')->count()}}</strong></h3>
					<h3>{{trans('home.users')}}</h3>
				</div>
			</div>
		</div>
	</div>

</section>
    
    
@endsection