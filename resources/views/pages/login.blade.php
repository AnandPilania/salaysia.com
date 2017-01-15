@extends("app")

@section('head_title', 'Login to | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
<section class="body-start">
	<div class="container">
	<p class="heading-fulpage">Login</p>
	</div>	
</section>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">{{trans('messages.home')}}</a></li>
          <li class="active">{{trans('messages.log_in')}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center text-center">
        <h1>{{trans('home.linto')}} {{getcong('site_name')}}</h1>
      </div>
    </div>
    <div class="col-md-offset-3 col-md-6 well-box contact-page-fomr">
      <div class="tab-content ">
        <div role="tabpanel" class="tab-pane active vendor-login" id="home">
          {!! Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')) !!} 

            <div class="message">
                         
                      @if (count($errors) > 0)
                          <div class="alert alert-danger">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                              <ul style="list-style: none;">
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                                    
        </div>
        @if(Session::has('flash_message'))

          <div class="alert alert-success fade in">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
             {{ Session::get('flash_message') }}
           </div>

             
        @endif

            <div class="form-group">
              <label class="control-label" for="email">{{trans('home.email_req')}}<span class="required">*</span></label>
              <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
            </div>
            <div class="form-group">
              <label class="control-label" for="password">{{trans('home.pass_req')}}<span class="required">*</span></label>
              <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
            </div>
            <div class="form-group">
              <button id="submit" name="submit" class="btn tp-btn-primary tp-btn-lg">{{trans('messages.log_in')}}</button>
              
              <a href="{{ URL::to('register') }}" class="pull-right"> <small>{{trans('home.Register')}}</small></a> 

              <a href="{{ URL::to('password/email') }}" class="pull-right" style="margin-right: 25px;
"> <small>{{trans('home.fpass')}}</small></a> </div>
          {!! Form::close() !!} 
        </div>
      </div>
      <h3 class="tp-title-center">{{trans('home.ousl')}}</h3>
      <div class="well-box mr-0 social-login"> 
        <a class="pull-left" href="{{ URL::to('social/login/facebook') }}"> <img src="{{ URL::asset('site_assets/images/signi-fb.png')}}" class="img-responsive mrgn-btm"/></a><a class="pull-right" href="{{ URL::to('social/login/google') }}"><img src="{{ URL::asset('site_assets/images/signi-g.png')}}" class="img-responsive"/></a>
		

      </div>
    </div>
  </div>
</div>
 

@endsection
