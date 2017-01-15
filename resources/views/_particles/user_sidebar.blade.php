<div class="col-md-3 col-sm-3 sidenav" >
        <div class="user-img text-center">
        
          <img alt="User Photo" src="{{URL::to(Auth::user()->image_icon)}}" class="img-responsive">
          
        </div>
    <span class="dividr1"></span>
    <span class="dividr1"></span>	
       <div class="clearfix"></div>
          <ul class="nav nav-pills nav-stacked db-submenu">
            <li class="{{classActivePathSite('dashboard')}}"><a href="{{ URL::to('dashboard') }}"><i class="fa fa-tachometer"></i>My Account</a></li>            
            <li class="{{classActivePathSite('profile')}}"><a href="{{ URL::to('profile') }}"><i class="fa fa-user"></i> Edit Profile</a></li>
            <li class="{{classActivePathSite('change_pass')}}"><a href="{{ URL::to('change_pass') }}"><i class="fa fa-key"></i> Change Password</a></li>
 <li class="{{classActivePathSite('my_favourite_universities')}}"><a href="{{ URL::to('my_favourite_universities') }}"><i class="fa fa-university"></i> My Favourite Universities</a></li>
 <li class="{{classActivePathSite('my_favourite_courses')}}"><a href="{{ URL::to('my_favourite_courses') }}"><i class="fa  fa-graduation-cap"></i> My Favourite Courses</a></li>
            @if(Auth::user()->user_role=='University user')
            <li class="{{classActivePathSite('my_university')}}"><a href="{{ URL::to('my_university') }}"><i class="fa fa-university"></i> My University</a></li>
            <li class="{{classActivePathSite('add_my_university')}}"><a href="{{ URL::to('add_my_university') }}"><i class="fa fa-plus"></i> Add University</a></li>
<li class="{{classActivePathSite('my_courses')}}"><a href="{{ URL::to('my_courses') }}"><i class="fa fa-graduation-cap"></i> My Courses</a></li>
<li class="{{classActivePathSite('add_course_front')}}"><a href="{{ URL::to('add_course_front') }}"><i class="fa fa-plus"></i> Add Course</a></li>
<li class="{{classActivePathSite('myinquiries')}}"><a href="{{ URL::to('myinquiries') }}"><i class="fa fa-suitcase"></i> My inquiries</a></li>
           @endif
@if(Auth::user()->user_role=='Agent user')
<li class="{{classActivePathSite('myuser_listing')}}"><a href="{{ URL::to('myuser_listing') }}"><i class="fa fa-users"></i> My User</a></li>
<li class="{{classActivePathSite('add_myusers')}}"><a href="{{ URL::to('add_myusers') }}"><i class="fa fa-user"></i> Add New User</a></li>
  @endif  
  <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>  
</ul> 
      </div>
