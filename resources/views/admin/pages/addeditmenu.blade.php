@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                
                               {{ isset($menuid->id) ? 'Edit Menu' : 'Add Menu' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/menu') }}">Menu</a></li>
                                <li><a class="link-effect" href="">{{ isset($menuid->id) ? 'Edit Menu ' : 'Add Menu' }}</a></li>
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



                                {!! Form::open(array('url' => array('admin/menu'),'class'=>'form-horizontal padding-15','name'=>'menu','id'=>'menu','role'=>'form')) !!}  
                                    <input type="hidden" name="id" value="{{ isset($menuid->id) ? $menuid->id : null }}">
                                    
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Parent Menu</label>
                                        
                                        <div class="">
                                            <select id="basic" name="parent_id" class="js-select2 form-control">
                                                <option value="">Select Menu</option>
                                                
                                                @foreach($parent_menu as $i => $category)    
                                                    @if(isset($menuid->parent_id) && $menuid->parent_id==$category->id)  
                                                        <option value="{{$category->id}}" selected >{{$category->title}}</option>
                                                    @else
                                                    <option value="{{$category->id}}">{{$category->title}}</option> 
                                                    @endif                          
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Menu Name</label>
                                          <div class="">
                                            <input type="text" name="title" value="{{ isset($menuid->title) ? $menuid->title : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Menu Slug</label>
                                        <div class="">
                                            <input type="text" name="slug" value="{{ isset($menuid->slug) ? $menuid->slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Order By</label>
                                        <div class="">
                                            <input type="text" name="ordering" value="{{ isset($menuid->ordering) ? $menuid->ordering : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Menu Link</label>
                                        <div class="">
                                            <input type="text" name="link" value="{{ isset($menuid->link) ? $menuid->link : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
							<div class="well-box file-browes">
                               
								<div class="form-group col-sm-12">
									<div class="">
										<button type="submit" class="btn btn-primary">{{ isset($menuid->id) ? 'Edit Menu' : 'Add Menu' }}</button>
										 
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
                                    
                                    
                                    
                                    {!! Form::close() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->            
@endsection