@extends('app')

@section('head_title', $cat->category_name.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>{{$cat->category_name}} Products</h1>
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
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">{{$cat->category_name}} Products</li>
        </ol>
      </div>
    </div>
  </div>
</div>

 <section class="cashback clearfix">
<div class=" text-center ">  
	<div class="col-sm-3">
		<div class="categories text-green">
			<p class="text-white bg-green heading"><a href="#" data-toggle="collapse" data-target="#colps1">ABOUT {{$cat->category_name}} <span class="downwrds"><img src="{{ URL::asset('site_assets/images/arrow-down.png') }}"/></span></a></p>
			<ul >
			
				<div id="colps1" class="collapse text-decor">
				<div class="sub text-black text-left">
				<p>{{$cat->category_name}} is</p>
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis </P>
				</div>
				</div>
			</ul>
			
		</div>
		<br>
		<div class="categories text-green">
			<p class="text-white bg-green heading"><a href="#" data-toggle="collapse" data-target="#colps2">CASHBACK CONDITION <span class="downwrds"><img src="{{ URL::asset('site_assets/images/arrow-down.png') }}"/></span></a></p>
			<ul >
			
				<div id="colps2" class="collapse text-decor">
				<div class="sub text-black text-left clearfix">
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</P>
					<div class="bg-white clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					<br>
					<div class="bg-grey clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					<br>
					<div class="bg-white clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					<br>
					<div class="bg-white clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					<br>
					
					<div class="bg-grey clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					<br>
					<div class="bg-grey clearfix">
						<div class="col-sm-2 nopadding">
						<p class="font-w8">0.40%</p>
						</div>
						<div class="col-sm-10 nopadding">
						<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.  </P>
						</div>
					</div>
					
				</div>
				</div>
			</ul>
			
		</div>
	</div>
<div class="col-sm-9 text-left"> 
	<form>
		<div class="clearfix">
			  <div class="col-sm-6"><input type="email" class="form-control-submit" id="email" placeholder="Enter your search"></div>
			  <div class="col-sm-2"><button type="submit" class=" btn-default-submit">Submit</button></div>
		</div>
   </form>  
   <div class="clearfix">
   <div class="col-sm-1 filter-imh">
		<i class="fa fa-filter fa-3x"></i>
   </div>
   <div class="col-sm-11 nopadding">
		<h3>Best offers, deals and coupns from {{$cat->category_name}}</h3>
   </div>
   </div>
      @if ( !$listings ->count() )
There is no Product till now. !!!
@else
	   @foreach($listings as $listing) 
	<div class="box-fliker-price">
		<div class="border-green clearfix">
			<div class="col-sm-2">
		 <a href="{{URL::to('products/'.$listing->listing_slug.'/'.$listing->id)}}"><img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive"></a>

			</div>
			<div class="col-sm-10">
				<p><span class="store-price">Store Price : <span class="text-red">{{$listing->price}}/</span></span> <span  class="deal">Deal Price : {{$listing->sale_price}}/-</span> <span class="heart-icon pull-right"><a href="#"> <i class= "fa fa-heart fa-2x"></i></a></span></p>
				<img src="{{ URL::asset('site_assets/images/star.png') }}"/>
				<div class="clearfix">
					<div class="col-sm-5">
              
					<p class="upto">                     
                                   <a href="{{URL::to('products/'.$listing->listing_slug.'/'.$listing->id)}}" class="title">{{$listing->title}}</a>
</p>
					</div>
					<div class="col-sm-7">
					<label><a href="#"><i class= "fa fa-calendar fa-2x"></i> </a> 
					<a href="#"><i class= "fa fa-facebook-f "></i> </a> 
					<a href="#"><i class= "fa fa-twitter "></i> </a>
					<a href="#"><i class= "fa fa-linkedin "></i> </a>
					<a href="#"><i class= "fa fa-google-plus "></i> </a>
				     </label><span class="grap-button pull-right"><a href="#">GRAP DEAL</a></span>
					</div>
				</div>
				<p class="offer">  {{str_limit($listing->address,50)}}</p>
			</div>
		</div>
	</div>
	
	  @endforeach
@endif	
	 <div class="row list-block-pagination">
            <div class="pagination-center">
              @include('_particles.pagination', ['paginator' => $listings])
            </div>
          </div>
	

</div>
</div>
</section>
 
@endsection