@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               {{ isset($location->id) ? 'Edit Rank ' : 'Add Rank' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/ranking') }}">Rank</a></li>
                                <li><a class="link-effect" href="">{{ isset($location->id) ? 'Edit Rank ' : 'Add Rank' }}</a></li>
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
                                {!! Form::open(array('url' => array('admin/ranking'),'class'=>'form-horizontal padding-15','name'=>'location_form','id'=>'location_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                    <input type="hidden" name="id" value="{{ isset($location->id) ? $location->id : null }}">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Type of Rank</label>
                                          <div class="col-sm-9">
                                            <select id="basic" name="rank_id" class="js-select2 form-control">
                                                <option value="">Select Type of Rank</option>
                                                @foreach($ranktype as $i => $category)    
                                                    @if(isset($location->rank_id) && $location->rank_id==$category->id)  
                                                        <option value="{{$category->id}}" selected >{{$category->title}}</option>
                                                         
                                                    @else
                                                    <option value="{{$category->id}}">{{$category->title}}</option> 
                                                    @endif                          
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Min Rank</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="rank_min" value="{{ isset($location->rank_min) ? $location->rank_min : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Max Rank</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="rank_max" value="{{ isset($location->rank_max) ? $location->rank_max : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($location->id) ? 'Edit ' : 'Add' }}</button>
                                             
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