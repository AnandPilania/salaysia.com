
<nav class="navbar navbar-inverse navi navbar-default navbar-fixed-top clearfix">
<!--<section class="topbar bg-black text-white clearfix">
  <div class="container">
    <div class="col-sm-3 ">
      <p><a href="#" class="date"><?php echo date('F d Y') ?></a></p>
    </div>
    <div class="col-sm-6 text-center">
      <p><a href="#">{{trans('messages.live_chat')}} {{getcong('contact_email')}}</a> <span class="space-number"><a href="#">{{getcong('contact_number')}}</a></span>  <span class="space-logins">
<!--                         <a href="#" data-toggle="modal" data-target="#login">Login</a> | <a href="#" data-toggle="modal" data-target="#signup">Signup</a> -->
                      <!--    @if(!Auth::check())<a href="{{ URL::to('login') }}" class="sign-padding" >{{trans('messages.login')}}</a> | <a href="{{ URL::to('register') }}" class="join-padding">{{trans('messages.signup')}}</a>
                 @else
                 <a href="{{ URL::to('login') }}" >{{trans('messages.account')}}</a> | <a href="{{ URL::to('logout') }}">{{trans('messages.logout')}}</a>
                  @endif
                                | <a href="{{ URL::to('contact') }}">{{trans('messages.contact')}}</a>
                                | <a href="{{ URL::to('en') }}">en</a>
                                | <a href="{{ URL::to('ar') }}">ar</a></span></p>
    </div>
    <div class="col-sm-3">
                 
      <p><label class="icons"><a href="{{getcong('facebook_url')}}"target="_blank"><img src="{{ URL::asset('site_assets/images/fb.png') }}"></a> <a href="{{getcong('twitter_url')}}" target="_blank"><img src="{{ URL::asset('site_assets/images/twi.png') }}"></a>  <a href="{{getcong('gplus_url')}}" target="_blank"><img src="{{ URL::asset('site_assets/images/g.png') }}"></a> <a href="{{getcong('linkedin_url')}}" target="_blank"><img src="{{ URL::asset('site_assets/images/in.png') }}"></a></label></p>
    </div>
  </div>
</section>
-->
<section class="navigation bg-white">
  <div class="container-fluid centered ">
  <div class="">
  <div class="col-sm-4">
    <div class="navbar-header padding-logo">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" href="{{ URL::to('/') }}">
                @if(getcong('site_logo'))
          <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt="logo" class="img-responsive">
          @else
            <img src="{{ URL::asset('site_assets/images/logo.png') }}" alt="logo" class="img-responsive">
          @endif
          </a>
   </div>
  </div>
  <div class="col-sm-8">
    <div class="collapse navbar-collapse" id="myNavbar">
      
          <ul class="nav navbar-nav navi-left-padding">
          {!!printMenu($_SESSION["menu"])!!}
                       <li class="dropdown drop-down" ><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                                         <ul class="dropdown-menu">
                                            <li>   @if(!Auth::check())<label><a href="{{ URL::to('login') }}" class="sign-padding" >{{trans('messages.sign_in')}}</a> <br><br> <a href="{{ URL::to('register') }}" class="join-padding">{{trans('messages.join')}}</a></label>
                 @else
                 <a href="{{ URL::to('login') }}" class="sign-padding" >{{trans('messages.account')}}</a>
                  @endif</li>
                                          </ul>
                                        </li>
                      <li class="dropdown drop-down" ><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                                         <ul class="dropdown-menu">
                                            <li> <a href="{{ URL::to('en') }}">en</a>
                             <a href="{{ URL::to('ar') }}">ar</a></li>
                                          </ul>
                                        </li>
                      
                                       
          </ul>
      
    </div>
  </div>
  </div>
  </div>
 </section>
</nav>