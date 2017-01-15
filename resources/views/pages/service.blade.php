@extends('app')
 @section('head_title', 'Services' .' | '.getcong('site_name') )    
@section('content')
    
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
    
<section class="stdu-baroad-parentneed to-know  clearfix">
    <div class="container">
        <div class="stdying-abroad-section">
           
            <h3 class="text-red">
                {{trans('messages.service_title')}}
            </h3>
            
            <div class="services-description clearfix col-sm-12">
            
<?php echo html_entity_decode(getcong('service_description')); ?>	
            </div>
                
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