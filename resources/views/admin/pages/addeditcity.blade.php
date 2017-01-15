@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script> 
  
<script type="text/javascript">
    var abc = 0;
    $(document).ready(function() {
        $('#add_more').click(function() {//When Add More Files button Clicked these function Willbe Called (new file field is added dynamically)
            $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                    $("<input/>", {name: 'gallery_file[]', type: 'file', id: 'file'}),        
            $("")
                    ));
        });
        $('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                //increment();
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img width='100' id='previewimg" + abc + "' src=''/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: '{{ URL::asset('site_assets/images/x.png') }}', alt: 'delete'}).click(function() {
                    //$(this).parent().parent().remove();
                    $(this).parent().remove();
                }));
            }
        });
        
        function imageIsLoaded(e) {
            $('#previewimg' + abc).attr('src', e.target.result);
        };
        
        $('#upload').click(function(e) {
            var name = $(":file").val();
            if (!name)
            {
                alert("First Image Must Be Selected");
                e.preventDefault();
            }
        });
    });
</script>
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                
                               {{ isset($cityid->id) ? 'Edit Cities' : 'Add Cities' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/cities') }}">Cities</a></li>
                                <li><a class="link-effect" href="">{{ isset($cityid->id) ? 'Edit City ' : 'Add City' }}</a></li>
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



                                {!! Form::open(array('url' => array('admin/cities/add'),'class'=>'form-horizontal padding-15','name'=>'city','id'=>'city','role'=>'form','enctype' => 'multipart/form-data')) !!}  
                                    <input type="hidden" name="id" value="{{ isset($cityid->id) ? $cityid->id : null }}">
                                    
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Country</label>
                                        
                                        <div class="">
                                            <select id="basic" name="country_id" class="js-select2 form-control">
                                                <option value="">Select Country</option>
                                                
                                                @foreach($country as $i => $category)    
                                                    @if(isset($cityid->country_id) && $cityid->country_id==$category->id)  
                                                        <option value="{{$category->id}}" selected >{{$category->title}}</option>
                                                         
                                                    @else
                                                    <option value="{{$category->id}}">{{$category->title}}</option> 
                                                    @endif                          
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">City Name</label>
                                          <div class="">
                                            <input type="text" name="city_name" value="{{ isset($cityid->city_name) ? $cityid->city_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">City Slug</label>
                                        <div class="">
                                            <input type="text" name="slug" value="{{ isset($cityid->slug) ? $cityid->slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="" class="control-label">Famous Places</label>
                                        <div class="">
                                            <input type="text" name="famous_places" value="{{ isset($cityid->famous_places) ? $cityid->famous_places : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">General information  :-</label>
                                    <textarea rows="7" placeholder="Description" name="description" id="summernote" class="js-summernote form-control">{{ isset($cityid->description) ? $cityid->description : null }}</textarea>
									</div>
									
							<div class="well-box">
                                <div class="form-group col-md-6">
                                    <label for="first" class="control-label">Country Image :-</label>
                                @if(isset($cityid->featured_image))
                                    <input type="file" name="featured_image" id="input-file" class="form-control input-md" >
								@else
									<input type="file" name="featured_image" id="input-file" class="form-control input-md" required='required'>
								@endif    
                                </div>
                                <div class="form-group col-md-6">
                                    @if(isset($cityid->featured_image))
                                    <img src="{{ URL::asset('upload/listings/'.$cityid->featured_image.'-s.jpg') }}" width="80" alt="featured">
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
							<div class="well-box file-browes">
                                <h3 class="page-title">Gallery</h3>
                                <div class="col-md-12"> 
                                    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/gallery_style.css') }}">
                                        
                                    <div class="media ">
                                        <div class="med_list media-left">
                                            @if(isset($cityid->id))
                                            @foreach($city_gallery as $i => $gallery_img)
                                                
                                            <div id="abcd_1" class="abcd">
                                                <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" width="100" alt="image">
                                                <a href="{{ url('admin/cities/galleryimage_delete/'.$gallery_img->id) }}"><img id="img" src="{{ URL::asset('site_assets/images/x.png') }}" alt="delete"></a>
                                            </div>
                                            @endforeach
                                            @endif   
                                                
                                                
                                        </div>
                                            
                                    </div>

                                    <div id="formdiv"> 
                                        <div id="filediv"></div>
                                        <div style="margin-top:5px;">
                                            <input name="gallery_file[]" type="file" id="file" class="add-floating-imgs"/>
                                            <input type="button" id="add_more" class="upload " value="Add More Images"/>
                                        </div>
                                            
                                    </div> 
                                        
                                </div>
                                <div class="clearfix"></div>
								<hr>
								<div class="form-group col-sm-12">
									<div class="">
										<button type="submit" class="btn btn-primary">{{ isset($cityid->id) ? 'Edit City' : 'Add City' }}</button>
										 
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