@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                
                               {{ isset($subcat->id) ? 'Edit Duration' : 'Add Duration' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/durations') }}">Duration</a></li>
                                <li><a class="link-effect" href="">{{ isset($subcat->id) ? 'Edit Duration' : 'Add Duration' }}</a></li>
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



                                {!! Form::open(array('url' => array('admin/durations/addduration'),'class'=>'form-horizontal padding-15','name'=>'category_form','id'=>'category_form','role'=>'form','enctype' => 'multipart/form-data')) !!}  
                                    <input type="hidden" name="id" value="{{ isset($subcat->id) ? $subcat->id : null }}">
                                    
                                 

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Duration Name</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="sub_category_name" value="{{ isset($subcat->sub_category_name) ? $subcat->sub_category_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Duration Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sub_category_slug" value="{{ isset($subcat->sub_category_slug) ? $subcat->sub_category_slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                      
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Duration Description</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="description" class="form-control" rows="5" placeholder="A few words about Level">{{ isset($subcat->description) ? $subcat->description : null }}</textarea>
                                            </div>
                                        </div>
<div class="form-group">
<label for="first" class="col-sm-3 control-label">Featured Image :-</label>
<div class="col-md-6">
                                    
                                    @if(isset($subcat->featured_image))
                                    <input type="file" name="featured_image" id="input-file" class="form-control input-md" >

 @else
                   <input type="file" name="featured_image" id="input-file" class="form-control input-md" required='required'>
 @endif    
                                </div>
                                <div class="col-md-3">
                                    @if(isset($subcat->featured_image))
                                        
                                    <img src="{{ URL::asset('upload/listings/'.$subcat->featured_image.'-s.jpg') }}" width="80" alt="featured">
                                    @endif
                                        
                                </div>
</div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($subcat->id) ? 'Edit Duration' : 'Add Duration' }}</button>
                                             
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