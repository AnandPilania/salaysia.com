@extends("admin.admin_app")
@section("content")
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                              {{ isset($user->id) ? 'Edit Permission' : 'Add Permission' }} For <strong> {{$user->first_name }}</strong>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/users') }}">Permissions</a></li>
                                <li><a class="link-effect" href="">{{ isset($user->id) ? 'Edit Permission' : 'Add Permission' }}</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->
                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="block">
                               <div class="block-content block-content-narrow"> 
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                @endif
                            {!! Form::open(array('url' => array('admin/users/givepermission'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','method'=>'post','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                <input type="hidden" name="id" value="{{ isset($user->id) ? $user->id : null }}">
             
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Countries</label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Countries)){ if($userpermission->Countries =='yes'){ ?> checked <?php } } ?> name="Countries" value="yes" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Universities</label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Universities)){ if($userpermission->Universities=='yes'){ ?> checked <?php } } ?> name="Universities" value="yes" class="form-control">
                    </div>
                </div>  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Courses</label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Courses)){ if($userpermission->Courses=='yes'){ ?> checked <?php } } ?> name="Courses" value="yes" class="form-control">
                    </div>
                </div>  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Our Services</label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Services)){ if($userpermission->Services=='yes'){ ?> checked <?php } } ?> name="Services" value="yes" class="form-control">
                    </div>
                </div>  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Our Brands </label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Brands)){ if($userpermission->Brands=='yes'){ ?> checked <?php } } ?> name="Brands" value="yes" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Testimonials </label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Testimonials)){ if($userpermission->Testimonials=='yes'){ ?> checked <?php } } ?> name="Testimonials" value="yes" class="form-control">
                    </div>
                </div>
                     <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Inqueries </label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Inqueries)){ if($userpermission->Inqueries=='yes'){ ?> checked <?php } } ?> name="Inqueries" value="yes" class="form-control">
                    </div>
                </div>
                       <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Users </label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Users)){ if($userpermission->Users=='yes'){ ?> checked <?php } } ?> name="Users" value="yes" class="form-control">
                    </div>
                </div>
  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">For Setting </label>
                    <div class="col-sm-9">
                        <input type="checkbox" <?php if(isset($userpermission->Setting)){ if($userpermission->Setting=='yes'){ ?> checked <?php } } ?> name="Setting" value="yes" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">{{ isset($user->id) ? 'Edit Permission' : 'Add Permission' }}</button>
                         
                    </div>
                </div>
                                {!! Form::close() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->     
@endsection