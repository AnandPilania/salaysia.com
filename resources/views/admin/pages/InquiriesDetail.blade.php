@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                             Detial Of Applicant
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/fees') }}">Inquiry</a></li>
                                <li><a class="link-effect" href="">Inquiry Detail</a></li>
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
                                
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">First Name</label>
                                          <div class="col-sm-9">{{$Inquiries->firstname}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Last Name</label>
                                          <div class="col-sm-9">{{$Inquiries->lastname}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Mobile</label>
                                          <div class="col-sm-9">{{$Inquiries->countryCode}}-{{$Inquiries->mobile}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Email</label>
                                          <div class="col-sm-9">{{$Inquiries->email}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Application for</label>
                                          <div class="col-sm-9">
										@foreach(\App\Listings::where('id',$Inquiries->uni_id)->get() as $uni)
										  {{$uni->title}}
										@endforeach
										  </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Study Level</label>
                                          <div class="col-sm-9">{{$Inquiries->level}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Plan to Study</label>
                                          <div class="col-sm-9">{{$Inquiries->monthRange}}</div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="" class="col-sm-3 control-label">Preffer Time To Speak</label>
                                          <div class="col-sm-9">{{$Inquiries->timeOptionId}}</div>
                                    </div>
                                    <hr>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->            
@endsection