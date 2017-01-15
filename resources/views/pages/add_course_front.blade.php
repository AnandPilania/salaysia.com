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
                {{ isset($listing->id) ? 'Edit Course' : 'Add Course' }}</p>
	</div>	
</section>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">{{ isset($listing->id) ? 'Edit Course' : 'Add Course' }}</li>
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
                  <h1>{{ isset($listing->id) ? 'Edit Course' : 'Add Course' }}</h1>                          
                  <div class="user-form">
                      <div class="block-content block-content-narrow"> 
                   {!! Form::open(array('url' => array('submit_front_Course'),'class'=>'','name'=>'listing_form','id'=>'listing_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
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
                                    <label for="first" class="control-label">Title :-</label>
                                    <input type="text" class="form-control input-md" placeholder="Title" name="title" id="title" value="{{ isset($listing->title) ? $listing->title : null }}" required>
                                </div>
                                 <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Description :-</label>
                                    <textarea rows="7" placeholder="description" name="description" id="summernote" class="js-summernote form-control">{{ isset($listing->description) ? $listing->description : null }}</textarea>
                                </div>  
                       <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Course Category:-</label>
                              
     <select  class="form-control input-md" name="Course_Category" >
                                <option value="">Course Category</option>
                                @foreach(\App\Categories::orderby('id')->get() as $aes)
          <option value="{{$aes->category_name}}" <?php if(isset($listing->category)){  if($listing->category==$aes->category_name){ echo 'selected'; } }?> >{{$aes->category_name}}</option>
                                 @endforeach
                          
                            </select>                              

</div>
                                <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Level of Study:-</label>
                              
     <select  class="form-control input-md" name="level" >
                                <option value="">Select Level</option>
                                @foreach(\App\SubCategories::orderby('id')->get() as $aes)
          <option value="{{$aes->sub_category_name}}" <?php  if(isset($listing->level)){ if($listing->level==$aes->sub_category_name){ echo 'selected'; } } ?> >{{$aes->sub_category_name}}</option>
                                 @endforeach
                          
                            </select>                              

</div>
                <div class="form-group col-md-12">
                                    <label for="first" class="control-label">Duration:-</label>
                              
     <select  class="form-control input-md" name="duration" >
                                <option value="">Select Duration</option>
                                @foreach(\App\Durations::orderby('id')->get() as $aes)
          <option value="{{$aes->sub_category_name}}" <?php if(isset($listing->duration)){  if($listing->duration==$aes->sub_category_name){ echo 'selected'; } } ?> >{{$aes->sub_category_name}}</option>
                                 @endforeach
                          
                            </select>                              

</div>
                                <div class="form-group col-sm-12">
                                  <label for="first" class="control-label">Start From:-</label>
                               <input type="text" class="form-control input-md" placeholder="Start From like Sept,Jan" name="start_from" id="title" value="{{ isset($listing->start_from) ? $listing->start_from : null }}" required>
                                </div> 
                                <div class="form-group col-sm-12">
                                  <label for="first" class="control-label">Fees:-</label>
                               <input type="text" class="form-control input-md" placeholder="Fees in $100" name="fees" id="title" value="{{ isset($listing->fees) ? $listing->fees : null }}" required>
                                </div>
                                 <div class="form-group col-sm-12">
                                  <label for="first" class="control-label">Type:-</label>
                                  <label> Full Time<input type="radio" class="form-control input-md" name="type" id="title" value="Full Time" <?php if(isset($listing)){ if($listing->type=='Full Time'){ echo 'checked'; } } ?> required></label>
                                 <label> Part Time<input type="radio" class="form-control input-md" name="type" id="title" value="Part Time" <?php if(isset($listing)){ if($listing->type=='Part Time'){ echo 'checked'; } } ?> required></label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="well-box">
                               
                                    
                                <div class="form-group col-md-6">
                                    <label for="first" class="control-label">Feature Image :-</label>
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