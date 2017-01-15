@extends("app")
@section('head_title', 'Dashboard | '.getcong('site_name') )
@section('head_url', Request::url())
@section("content")
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script> 
    
    
<link rel="stylesheet" href="{{ URL::asset('site_assets/summernote/summernote.css') }}">
    
<script src="{{ URL::asset('site_assets/summernote/summernote.js') }}"></script>
    
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
 $('#summernote1').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote2').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote3').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote4').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote5').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote6').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
         $('#summernote7').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
        });
    });
</script>  
    
<script type="text/javascript">
    $(document).ready(function(e) {
        
        $("#category").change(function(){
            var cat=$("#category").val();
            $.ajax({
                type: "GET",
                url: "{{ URL::to('ajax_subcategories') }}/"+cat,
                //data: "cat=" + cat,
                success: function(result){
                    
                    $("#sub_category").html(result);
                }
            });
            
        });
    });
</script> 

<script type="text/javascript">
    var abc = 0;
    //function increment() {
    
    //};
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

<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/tags/jquery.tagsinput.css') }}" />

<script type="text/javascript" src="{{ URL::asset('site_assets/tags/jquery.tagsinput.js') }}"></script>
<script type="text/javascript">
    
    function onAddTag(tag) {
        alert("Added a amenities: " + tag);
    }
    function onRemoveTag(tag) {
        alert("Removed a amenities: " + tag);
    }
    
    function onChangeTag(input,tag) {
        alert("Changed a amenities: " + tag);
    }
    
    $(function() {
        
        $('#tags_1').tagsInput({width:'auto'});
        
        // Uncomment this line to see the callback functions in action
        //      $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});
        
        // Uncomment this line to see an input with no interface for adding new tags.
        //      $('input.tags').tagsInput({interactive:false});
    });
    
</script>
<section class="body-start">
	<div class="container">
	<p class="heading-fulpage">
                {{ isset($listing->id) ? 'Edit University ' : 'Add University' }}</p>
	</div>	
</section>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">{{ isset($listing->id) ? 'Edit University ' : 'Add University' }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      @include("_particles.user_sidebar")
       @if(Auth::user()->user_role=='University user')
     <div class="col-md-9 col-sm-9 content-right bg-gry">
        <div class="row">
            <div class="bg-whit clearfix">
                <div class="col-md-12" id="aboutus">
                  <h1>{{ isset($listing->id) ? 'Edit University ' : 'Add University' }}</h1>                          
                  <div class="user-form">
                    <div class="block-content block-content-narrow"> 
                    {!! Form::open(array('url' => array('submit_front_university'),'class'=>'','name'=>'listing_form','id'=>'listing_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                    <input type="hidden" name="id" value="{{ isset($listing->id) ? $listing->id : null }}">
                    <div class="row">
                        <div class="col-md-12" id="aboutus">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul style="list-style: none;">
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
                                
                            <div class="well-box">
                                <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Name of University :-</label>
                                    <input type="text" class="form-control input-md" placeholder="Name of University" name="title" id="title" value="{{ isset($listing->title) ? $listing->title : null }}" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Description:-</label>
                                    <textarea rows="7" placeholder="Description" name="description" id="summernote" class="js-summernote form-control">{{ isset($listing->description) ? $listing->description : null }}</textarea>
                                </div>
 <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Welcome Content:-</label>
                                    <textarea rows="7" placeholder="Welcome Ccontent" name="welcome_content" id="summernote1" class="js-summernote form-control">{{ isset($listing->welcome_content) ? $listing->welcome_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Campus Content:-</label>
                                    <textarea rows="7" placeholder="Campus Content" name="campus_content" id="summernote2" class="js-summernote form-control">{{ isset($listing->campus_content) ? $listing->campus_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Academic Content:-</label>
                                    <textarea rows="7" placeholder="Academic Content" name="academic_content" id="summernote3" class="js-summernote form-control">{{ isset($listing->academic_content) ? $listing->academic_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Research Content:-</label>
                                    <textarea rows="7" placeholder="Research Content" name="research_content" id="summernote4" class="js-summernote form-control">{{ isset($listing->research_content) ? $listing->research_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Admissions Content:-</label>
                                    <textarea rows="7" placeholder="Admissions Content" name="admissions_content" id="summernote5" class="js-summernote form-control">{{ isset($listing->admissions_content) ? $listing->admissions_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Facilities Content:-</label>
                                    <textarea rows="7" placeholder="Facilities Content" name="facilities_content" id="summernote6" class="js-summernote form-control">{{ isset($listing->facilities_content) ? $listing->facilities_content : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Accommodation Content:-</label>
                                    <textarea rows="7" placeholder="Accommodation Content" name="accommodation_content" id="summernote7" class="js-summernote form-control">{{ isset($listing->accommodation_content) ? $listing->accommodation_content : null }}</textarea>
                                </div>
                               
                                <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Specialization:-</label>
                                    <input type="text" class="form-control input-md" placeholder="Specialization of University" name="specialization" id="title" value="{{ isset($listing->specialization) ? $listing->specialization : null }}" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Level of Study:-</label>
                                    
<select  class="form-control input-md" name="level" >
                                <option value="">Select Level</option>
                                <option <?php if(isset($listing->level )){ if($listing->level =='Diploma'){ echo 'selected' ; } } ?>>Diploma</option>
                                <option <?php if(isset($listing->level )){ if($listing->level =='Graduate'){ echo 'selected' ; } } ?>>Graduate</option>
                                <option <?php if(isset($listing->level )){ if($listing->level =='Postgraduate'){ echo 'selected' ; } } ?>>Postgraduate</option>
                            </select>
                                </div>
                                  <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Ranking:-</label>
                                    <input type="number" class="form-control input-md" placeholder="Ranking" name="ranking" id="title" value="{{ isset($listing->ranking) ? $listing->ranking : null }}" min="1" max="2000" title="Enter Ranking 1 to 2000">
                                </div>
                                 <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Scholarship Available</label>
                                    Yes<input type="radio" class="form-control input-md" value="yes"  name="scolarship" id="title" <?php if(isset($listing->scolarship)){ if($listing->scolarship=='yes'){ echo 'checked' ; } } ?> >
 No<input type="radio" class="form-control input-md" value="no"  name="scolarship" id="title" <?php if(isset($listing->scolarship)){ if($listing->scolarship=='no'){ echo 'checked' ; } }?> >
                                </div>  
                                  
                                 <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Courses:-</label>
                               <?php if(isset($addedcourses )){ ?>
                                    <select name="courses[]" multiple="multiple">
                                        <option value="">Select Courses</option>
                                        @foreach($courses as  $course)
                                      <option  <?php foreach($addedcourses as  $addcourse){ if($course->id==$addcourse->course_id) { echo 'selected="selected"' ; } } ?> value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                               <?php }else{ ?>
                                     <select name="courses[]" multiple="multiple">
                                        <option value="">Select Courses</option>
                                         @foreach($courses as  $course)
                                       <option value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                    <?php }?>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Address :-</label>
                                    <textarea rows="7" placeholder="Address" name="address" class=" form-control">{{ isset($listing->address) ? $listing->address : null }}</textarea>
                                </div>
                                 <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Country:-</label>
                               
<select name="country">
<option value="">Select Country...</option>
@foreach(\App\Countries::orderBy('title')->get() as $country)
 <option <?php if(isset($listing)){ if($listing->country==$country->title){ echo 'selected'; } } ?> value="{{$country->title}}">{{$country->title}}</option>
 @endforeach
</select>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="well-box">
                                <div class="well-box well-box-file">
                                    <h3 class="page-title">Tags</h3>
                                    <div class="detail-content">
                                        <input id="tags_1" type="text" name="amenities" class="form-control" value="{{ isset($listing->amenities) ? $listing->amenities : 'kids,WiFi,Toys' }}" />
                                    </div>
                                </div>
<br/>
    <div class="form-group col-md-6">
                  <label for="first" class="control-label">Map Latitude :-</label>
                  <input type="text" class="form-control input-md" placeholder="Latitude" name="latitude" id="latitude" value="{{ isset($listing->map_lat) ? $listing->map_lat : null }}">
                </div>
                <div class="form-group col-md-6">
                  <label for="first" class="control-label">Map Lontgitude :-</label>
                  <input type="text" class="form-control input-md" placeholder="Lontgitude" name="lontgitude" id="lontgitude" value="{{ isset($listing->map_long) ? $listing->map_long : null }}">
                </div>
<br/>
                                <div class="form-group col-md-6">
                                    <label for="first" class="control-label">Featured Image :-</label>
 @if(isset($listing->featured_image))
                                    <input type="file" name="featured_image" id="input-file" class="form-control input-md" >

 @else
                   <input type="file" name="featured_image" id="input-file" class="form-control input-md" required='required'>
 @endif
                                </div>
                                <div class="form-group col-md-6">
                                    @if(isset($listing->featured_image))
                                    <img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" width="80" alt="featured">
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="well-box file-browes">
                                <h3 class="page-title">Gallery</h3>
                                <div class="col-md-12"> 
                                    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/gallery_style.css') }}">
                                    <div class="media">
                                        <div class="med_list media-left">
                                            @if(isset($listing->id))
                                            @foreach($listing_gallery_images as $i => $gallery_img)
                                                
                                            <div id="abcd_1" class="abcd">
                                                <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" width="100" alt="image">
                                                <a href="{{ url('listing/galleryimage_delete/'.$gallery_img->id) }}"><img id="img" src="{{ URL::asset('site_assets/images/x.png') }}" alt="delete"></a>
                                            </div>
                                            @endforeach
                                            @endif   
                                                
                                        </div>
                                    </div>
                                    <div id="formdiv"> 
                                        <div id="filediv"></div>
                                        <div style="margin-top:5px;">
                                            <input name="gallery_file[]" type="file" id="file"/>
                                            <input type="button" id="add_more" class="upload" value="Add More Images"/>
                                        </div>
                                    </div> 
                                </div> 
    <div class="well-box">
              <h3 class="page-title">Video-1</h3>

                <div class="form-group col-md-12">                   
                  <textarea rows="3" placeholder="Video-1 Embed Code" name="video"  class="form-control">{{ isset($listing->video) ? $listing->video : null }}</textarea>
                  <div class="textarea-resize"></div>

                </div>

              <div class="clearfix"></div>              
            </div>
<div class="well-box">
              <h3 class="page-title">Video-2</h3>

                <div class="form-group col-md-12">                   
                  <textarea rows="3" placeholder="Video-2 Embed Code" name="video2"  class="form-control">{{ isset($listing->video2) ? $listing->video2 : null }}</textarea>
                  <div class="textarea-resize"></div>

                </div>

              <div class="clearfix"></div>              
            </div>
<div class="well-box">
              <h3 class="page-title">Video-3</h3>

                <div class="form-group col-md-12">                   
                  <textarea rows="3" placeholder="Video-3 Embed Code" name="video3"  class="form-control">{{ isset($listing->video3) ? $listing->video3 : null }}</textarea>
                  <div class="textarea-resize"></div>

                </div>

              <div class="clearfix"></div>              
            </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="center mb20">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      @else
 <script>window.location='/dashboard';</script>
 @endif
    </div>
  </div>
</div>

@endsection