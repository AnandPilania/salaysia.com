@extends('app')
@section('content')
 <section class="my-slider">
     <div class="container search_container">
         <div class="homepage-search homepage-search-max">
 @include("_particles.slider_search")
</div>
     </div>
            <ul>
                <li>
                    @if(getcong('home_slide_image1')!='')
                    <section class="slide_1 slide_item"> <img src="{{ URL::asset('upload/'.getcong('home_slide_image1'))}}" alt="slide images" class="img-responsive"> </section>
                    @endif
                </li>
                <li>
                    @if(getcong('home_slide_image2')!='')
                    <section class="slide_2 slide_item"> <img src="{{ URL::asset('upload/'.getcong('home_slide_image2'))}}" alt="slide images" class="img-responsive"> </section>
                    @endif
                </li>
                <li>
                    @if(getcong('home_slide_image3')!='')
                    <section class="slide_3 slide_item"> <img src="{{ URL::asset('upload/'.getcong('home_slide_image3'))}}" alt="slide images" class="img-responsive"> </section>
                    @endif
                </li>
                <li>
                    @if(getcong('home_slide_image4')!='')
                    <section class="slide_4 slide_item"> 
                    <img src="{{ URL::asset('upload/'.getcong('home_slide_image4'))}}" alt="slide images" class="img-responsive"></section>
                    @endif
                </li>
                <li>
                    @if(getcong('home_slide_image5')!='')
                    <section class="slide_5 slide_item"><img src="{{ URL::asset('upload/'.getcong('home_slide_image5'))}}" alt="slide images" class="img-responsive"> </section>
                    @endif
                </li>
            </ul>
        </section>
<div class="homepage-search-min homepage-search">
 @include("_particles.slider_search")
</div>
<br>
<section class="unsure clearfix">
    <div class="whatto-stdy  text-center clearfix container">
        <div class="centerd1 clearfix">
            <h1>{{trans('home.uwts')}}</h1>
            <h1 class="have-look">{{trans('home.halh')}}</h1>
            <br>
           @foreach($courses as $course) 
            <div class="col-sm-4 home-img-gallery asd">
                <div class="brdr-red" id="uppergal">
                    <div class="prod">
                        <img src="{{ URL::asset('upload/listings/'.$course->featured_image.'-s.jpg') }}" class="img-responsive">
                        <div class="overlay text-center">
                            <p>{!! str_limit(strip_tags($course->description), $limit = 250) !!}</p>
                            
                        </div>
                        <div class="discription bg-red brdr-red1">
                          <p><a href="{{URL::to('courses/'.$course->course_slug.'/'.$course->id)}}" class="title">{{$course->title}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach  
        </div>
    </div>
</section>
<section class="services clearfix">
	<div class="services-section ">
		<div class="col-sm-6">
		 <img src="{{ URL::asset('site_assets/images/bg-img-grey.png') }}" class="img-responsive">
		</div>
		<div class="col-sm-6 text-center">
		<h1 class="">{{trans('home.our_serv')}}</h1>
		<br>
		@foreach($services as $service)
			<div class="col-sm-6 nopadding  box-services">
				<div class="col-sm-3">
					<img src="{{ URL::asset('upload/listings/'.$service->featured_image.'-s.jpg') }}">
				</div>
				<div class="col-sm-9">
				
					<p class="red-text">{{$service->title}}</p>
					{!! str_limit($service->body, $limit = 200) !!}
				</div>
			</div>
		@endforeach  	
		
		
		</div>
	</div>
</section>
<br>
<section class="unsure clearfix">
    <div class="whatto-stdy  text-center clearfix container">
        <div class="centerd1 clearfix">
            <h1>{{trans('home.wcys')}}</h1>
            <h1 class="have-look">{{trans('home.tsdpbs')}}</h1>
            <br>
           @foreach($countries as $country) 
            <div class="col-sm-3 home-img-gallery">
                <div class="brdr-red ">
                    <div class="prod">
                        <img src="{{ URL::asset('upload/listings/'.$country->featured_image.'-s.jpg') }}" class="img-responsive">
                        <div class="overlay text-center">
                            <p><?php $data=str_limit($country->description, $limit = 250);echo strip_tags($data); ?></p>
                            
                        </div>
                        <div class="discription bg-red brdr-red1">
                          <p><a href="{{URL::to('countries/'.$country->testimonial_slug.'/'.$country->id)}}" class="title">{{$country->title}}</a></p>

                        </div>
                    </div>
                </div>
            </div>
          @endforeach  
        </div>
    </div>
</section>
<section class="services clearfix">
<section class="testimonial text-center">
    <div class="text-section container">
        <h2 class="">{{trans('home.client_rev')}}</h2>
        <div class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                   <?php $i=1;?>
                @foreach($testimonials as $testimonial)
                <div class="item <?php if($i==1){ echo 'active'; }?>">
                    <div class="scrollingimges">
                        <img src="{{ URL::asset('upload/listings/'.$testimonial->featured_image.'-s.jpg') }}"/>
                        <br>
                        <p class="red-text">{{$testimonial->auther_name}}</p>
                        <img src="{{ URL::asset('site_assets/images/left-quats.png') }}" class="img-responsive quates"/> 
                        <p>{{$testimonial->description}}</p>	
                        <img src="{{ URL::asset('site_assets/images/right-quats.png') }}" class="pull-right img-responsive quates"/> 
                    </div>
                </div>
                    <?php $i++ ; ?>
                @endforeach  
                </div>
            
            <!-- Left and right controls -->
            
        </div>
    </div>
    
</section>
    
<section class="sponsers text-center">
    <div class="contaier slider-bottom-scrl">
        <h2 class=" ">{{trans('home.our_spons')}}</h2>
        <section class="regular slider my-scrolling-slider">
          @foreach($brands as $brand)
            <div>
                <div class="product-box-single">
                    <img src="{{ URL::asset('upload/listings/'.$brand->featured_image.'-s.jpg') }}" class="img-responsive">
                </div>
            </div>
            @endforeach 
            
        </section>
    </div>
</section>

@endsection
    @section('footer_scripts')
        <script type="text/javascript" src="{{ URL::asset('site_assets/js/modernizr.js') }}"></script>
    @if(trans('messages.lang_name')=="en")
     <script src="{{ URL::asset('site_assets/js/slider.js') }}" type="text/javascript"></script>
    @elseif(trans('messages.lang_name')=="ar")
 <script src="{{ URL::asset('site_assets/js/slider_ar.js') }}" type="text/javascript"></script> 
    @endif
    @endsection