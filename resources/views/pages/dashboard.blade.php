@extends("app")

@section('head_title', 'Dashboard | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
<section class="body-start">
	<div class="container">
	<p class="heading-fulpage">Dashboard</p>
	</div>	
</section>

<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      
      @include("_particles.user_sidebar")

     <div class="col-md-9 col-sm-9 content-right bg-gry">
        <div class="row">
            <div class="bg-whit clearfix">
          <div class="col-md-12" id="aboutus">
            <h1>My Account</h1>                          
            <div class="user-form">
                <form class="form-inline form-tab">
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>First Name:</label>
                        </div>
                        <div class="col-sm-6">
                            {{$user->first_name}}
                        </div>
                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>Last Name:</label>
                        </div>
                        <div class="col-sm-6">
                          {{$user->last_name}}
                        </div>
                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>Email:</label>
                        </div>
                        <div class="col-sm-6">
                          {{$user->email}}
                        </div>
                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>Mobile:</label>
                        </div>
                        <div class="col-sm-6">
                            {{$user->mobile}}
                        </div>
                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>Address:</label>
                        </div>
                        <div class="col-sm-6">
                          {{$user->address}}
                        </div>
                    </div>
                
                    <div class=" col-sm-12">
                        <div class="col-sm-2">
                            <label>Website:</label>
                        </div>
                        <div class="col-sm-6">
                           {{$user->website}}
                        </div>
                    </div>
                </form>
            </div>
                                             
          </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection