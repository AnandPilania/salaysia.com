@extends("admin.admin_app")

@section("content")

 <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('{{ URL::asset('admin_assets/img/photos/bg.jpg') }}');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content content-narrow">
                   <div class="row">
				   
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Menu== 'yes')
						<div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/menu') }}">
                                <div class="block-content block-content-full bg-city">
                                    <i class="fa fa-bars fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    Menu
                                </div>
                            </a>
                        </div>
@endif  
@endforeach				   
				   
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Brands== 'yes')
                       <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/brands') }}">
                                <div class="block-content block-content-full bg-primary">
                                    <i class="fa fa-puzzle-piece fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    <strong>{{$brands}}</strong> Brands
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Services== 'yes')
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/our_services') }}">
                                <div class="block-content block-content-full bg-modern-dark">
                                    <i class="fa fa-list-ul fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    <strong>{{$services}}</strong> Our Services
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Courses== 'yes')
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/courses') }}">
                                <div class="block-content block-content-full bg-success">
                                    <i class="fa fa-graduation-cap fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    <strong>{{$courses}}</strong> Courses
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Universities== 'yes') 
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/universities') }}">
                                <div class="block-content block-content-full bg-modern">
                                    <i class="fa fa-university fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    <strong>{{$universities}}</strong> Universities
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Users== 'yes')
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/users') }}">
                                <div class="block-content block-content-full bg-amethyst">
                                    <i class="fa fa-users fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    <strong>{{$users}}</strong> Users
                                </div>
                            </a>
                        </div>
@endif  
@endforeach


@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Testimonials== 'yes')
						<div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/testimonials') }}">
                                <div class="block-content block-content-full bg-primary">
                                    <i class="fa fa-suitcase fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    Testimonials
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Setting== 'yes')
                        <div class="col-sm-6 col-lg-3">
                            <a class="block block-link-hover1 text-center" href="{{ URL::to('admin/settings') }}">
                                <div class="block-content block-content-full bg-city">
                                    <i class="fa fa-cog fa-5x text-white"></i>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                    Settings
                                </div>
                            </a>
                        </div>
@endif  
@endforeach
						
						
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                       
                    </div>
                     
                </div>
                <!-- END Page Content -->

@endsection