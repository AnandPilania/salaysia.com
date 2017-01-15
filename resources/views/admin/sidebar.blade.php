<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <a class="h5 text-white" href="{{ URL::to('admin/dashboard') }}">
                    <span class="h4 font-w600 sidebar-mini-hide">{{getcong('site_name')}}</span>
                </a>
            </div>
            <!-- END Side Header -->
            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                    <a class="{{classActivePath('dashboard')}}" href="{{ URL::to('admin/dashboard') }}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
<!--                
   <li><a class="{{classActivePath('blog')}}" href="{{ URL::to('admin/blog') }}"><i class="fa fa-pencil"></i>Blog</a></li>  
-->
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Menu== 'yes')
<li><a class="{{classActivePath('menu')}}" href="javascript:;"data-toggle="nav-submenu"><i class="fa fa-bars"></i>Menus</a>
<ul class="submenu">
    <li><a class="{{classActivePath('menu')}}" href="{{ URL::to('admin/menu') }}"><i class="fa fa-bars"></i>All Menus</a></li>
    <li><a class="{{classActivePath('add')}}" href="{{ URL::to('admin/menu/add') }}"><i class="fa fa-plus"></i>Add Menu</a></li>
</ul>
</li>
@endif  
@endforeach

@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Universities== 'yes')             
                    <li><a class="{{classActivePath('universities')}}" href="javascript:;" data-toggle="nav-submenu"><i class="fa fa-university"></i>Universities</a>
<ul class="submenu">
  <li><a class="{{classActivePath('universities')}}" href="{{ URL::to('admin/universities') }}" ><i class="fa fa-university"></i>All Universities</a></li>
  <li><a class="{{classActivePath('universities')}}" href="{{ URL::to('/add_product') }}" ><i class="fa fa-plus"></i>Add University</a></li>
  <li><a class="{{classActivePath('specialization')}}" href="{{ URL::to('/admin/specialization') }}" ><i class="fa fa-th"></i>Specialization</a></li>
  <li><a class="{{classActivePath('ranktype')}}" href="{{ URL::to('/admin/ranktype') }}" ><i class="fa fa-sort-numeric-desc"></i>Rank Type</a></li>
  <li><a class="{{classActivePath('ranking')}}" href="{{ URL::to('/admin/ranking') }}" ><i class="fa fa-sort-numeric-desc"></i>Rank</a></li>
</ul></li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Courses== 'yes')

                    <li><a class="{{classActivePath('courses')}}" href="javascript:;" data-toggle="nav-submenu"><i class="fa fa-graduation-cap"></i>Courses</a>
<ul class="submenu">
<li><a class="{{classActivePath('courses')}}" href="{{ URL::to('admin/courses') }}" ><i class="fa fa-graduation-cap"></i>All Courses</a>
<li><a class="{{classActivePath('add_course')}}" href="{{ URL::to('add_course') }}" ><i class="fa fa-plus"></i>Add Course</a>
<li ><a class="{{classActivePath('durations')}}" href="{{URL::to('/admin/durations')}}"><i class="fa fa-clock-o"></i>Durations</a></li>
<li ><a class="{{classActivePath('categories')}}" href="{{ URL::to('admin/categories') }}"><i class="fa fa-bars"></i>Course Categories</a></li>
<li ><a class="{{classActivePath('subcategories')}}" href="{{ URL::to('admin/subcategories') }}"><i class="fa fa-bar-chart"></i>Level</a></li>
<li ><a class="{{classActivePath('fees')}}" href="{{ URL::to('admin/fees') }}"><i class="fa fa-money"></i>Fees</a></li>
<li ><a class="{{classActivePath('intake')}}" href="{{ URL::to('admin/intake') }}"><i class="fa fa-calendar"></i>Intake</a></li>
<li ><a class="{{classActivePath('feescycle')}}" href="{{ URL::to('admin/feescycle') }}"><i class="fa fa-money"></i>Fees Cycle</a></li>


</ul>


</li>



@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Services== 'yes')
                    <li><a class="{{classActivePath('our_services')}}" href="javascript:;" data-toggle="nav-submenu"><i class="fa fa-random"></i>Our Services</a>
<ul class="submenu">
<li><a class="{{classActivePath('our_services')}}" href="{{ URL::to('admin/our_services') }}"><i class="fa fa-random"></i>Our Services</a></li><li><a class="{{classActivePath('new-service')}}" href="{{ URL::to('admin/new-service') }}"><i class="fa fa-plus"></i>Add Service</a></li>
</ul>
</li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Brands== 'yes')
                    <li><a class="{{classActivePath('brands')}}" href="javascript:;"data-toggle="nav-submenu"><i class="fa fa-puzzle-piece"></i>Our Brands</a>
<ul class="submenu">
 <li><a class="{{classActivePath('brands')}}" href="{{ URL::to('admin/brands') }}"><i class="fa fa-puzzle-piece"></i>All Brands</a></li> <li><a class="{{classActivePath('add_brand')}}" href="{{ URL::to('/add_brand') }}"><i class="fa fa-puzzle-piece"></i>Add Brand</a></li>
</ul>
</li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Testimonials== 'yes')
                    <li><a class="{{classActivePath('testimonials')}}" href="javascript:;"data-toggle="nav-submenu"><i class="fa fa-suitcase"></i>Testimonials</a>
<ul class="submenu">
 <li><a class="{{classActivePath('testimonials')}}" href="{{ URL::to('admin/testimonials') }}"><i class="fa fa-suitcase"></i>All Testimonials</a></li>
 <li><a class="{{classActivePath('add_testimonial')}}" href="{{ URL::to('add_testimonial') }}"><i class="fa fa-plus"></i>Add Testimonial</a></li>
</ul>
</li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Inqueries== 'yes')
<li><a class="{{classActivePath('inquiries')}}" href="{{ URL::to('admin/inquiries') }}"><i class="fa fa-suitcase"></i>Inquiries</a></li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Users== 'yes')
                    <li><a class="{{classActivePath('users')}}" href="javascript:;"data-toggle="nav-submenu"><i class="fa fa-users"></i>Users</a>
<ul class="submenu">
    <li><a class="{{classActivePath('users')}}" href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i>All Users</a></li>
    <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/users/adduser') }}"><i class="fa fa-user"></i>AddUser</a></li>
</ul>
</li>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Countries == 'yes')
<li>
	<a class="{{classActivePath('countries')}}" href="javascript:;"  data-toggle="nav-submenu"><i class="fa fa-location-arrow"></i>Countries</a>
		<ul class="submenu">
			<li>
				<a class="{{classActivePath('countries')}}" href="{{ URL::to('admin/countries') }}" ><i class="fa fa-location-arrow"></i>All Countries</a>
			</li>
			<li>
				<a class="{{classActivePath('add_country')}}" href="{{ URL::to('/add_country') }}" ><i class="fa fa-plus"></i>Add Country</a>
			</li>
		</ul>
</li>
<li>
	<a class="{{classActivePath('cities')}}" href="javascript:;"  data-toggle="nav-submenu"><i class="fa fa-location-arrow"></i>Cities</a>
		<ul class="submenu">
			<li>
				<a class="{{classActivePath('cities')}}" href="{{ URL::to('/admin/cities') }}" ><i class="fa fa-location-arrow"></i>All Cities</a>
			</li>
			<li>
				<a class="{{classActivePath('add')}}" href="{{ URL::to('/admin/cities/add') }}" ><i class="fa fa-plus"></i>Add Cities</a>
			</li>
		</ul>
</li>

@endif  
@endforeach

@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Setting== 'yes')
                    <li><a class="{{classActivePath('settings')}}" href="{{ URL::to('admin/settings') }}"><i class="fa fa-cog"></i>Settings</a></li> 
@endif  
@endforeach
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->