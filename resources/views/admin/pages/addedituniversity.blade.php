@extends("admin.admin_app")

@section('head_url', Request::url())

@section("content")
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Universities== 'yes')   

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
 <script>
    $(document).ready(function() {
       $("#specialization").change(function(){  //"select all" change
			if($(this).val()=="all"){
				$("#specialization option").attr('selected','selected');
				$("#specialization option").prop("selected", true);
			}
			$("#specialization option[value*='all']").prop("selected", false);
		});
		$("#getcity").change(function(){  //"select all" change
			if($(this).val()=="all"){
				$("#getcity option").attr('selected','selected');
				$("#getcity option").prop("selected", true);
			}
			$("#getcity option[value*='all']").prop("selected", false);
		});
		
		$("#levels").click(function () {
			$(".checkBoxClass").prop('checked', $(this).prop('checked'));
		});

		$("#Courses").change(function(){  //"select all" change
			if($(this).val()=="all"){
				$("#Courses option").attr('selected','selected');
				$("#Courses option").prop("selected", true);
			}
			$("#Courses option[value*='all']").prop("selected", false);
		});
		
    });
</script>  
                             
<script type="text/javascript">
    $(document).ready(function(e) {   
        $("#country").change(function(){
            var cat=$("#country").val();
            $.ajax({
                type: "GET",
                url: "{{ URL::to('/admin/ajax_cities') }}/"+cat,
                success: function(result){
                    $("#getcity").html(result);
<?php 
if(isset($listing->city)){
	$citiess = explode(',',$listing->city);
	foreach($citiess as $value){
		echo "$('#getcity option[value*=\'".$value."\']').attr('selected','selected');";
	}
}
?> 
                }
            });
            
        });
<?php if(isset($listing->country)){ echo "$('#country').change();"; } ?>

		
		$(".ranktype").change(function(){
			console.log($(this).parents());
			console.log($(this).attr("data-id"));
			id = $(this).attr("data-id");
			//alert($(this));
            var cat=$("#ranktype"+id).val();
            $.ajax({
                type: "GET",
                url: "{{ URL::to('/admin/ajax_ranking') }}/"+cat,
                //data: "cat=" + cat,
                success: function(result){
                    
                    $("#ranking"+id).html(result);
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
    
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                {{ isset($listing->id) ? 'Edit University ' : 'Add University' }}</h1>

        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                 <li><a class="link-effect" href="{{ URL::to('admin/universities') }}">Universities</a></li>
                <li class="active">{{ isset($listing->id) ? 'Edit University ' : 'Add University' }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->
<div class="content content-boxed">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="block">
                    <div class="block-content block-content-narrow"> 
                        
                    {!! Form::open(array('url' => array('submit_university'),'class'=>'','name'=>'listing_form','id'=>'listing_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
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
									<?php if(isset($listing->specialization))
									$specializat = explode(',',$listing->specialization); ?>
									<select  class="form-control input-md" name="specialization[]" multiple="multiple" id="specialization">
										<option value="all">All Specialization</option>
										@foreach(\App\Specialization::orderby('id')->get() as $spe)
											@if(isset($listing->specialization))
													<option value="{{$spe->title}}" <?php  if(isset($listing->specialization)){foreach($specializat as $spec){ if($spec==$spe->title){ echo 'selected';}}}?> >{{$spe->title}}</option>
												@else
													<option value="{{$spe->title}}">{{$spe->title}}</option>
											@endif
										@endforeach
									</select>
                                </div>
								<?php /*<div class="form-group col-md-12">
                                    <label for="first" class="control-label">Level of Study:-</label>
									<?php if(isset($listing->level))
									$levels = explode(',',$listing->level); ?>
									<select  class="form-control input-md" name="level[]" multiple="multiple" id="levels" >
										<option value="all">All level</option>
										@foreach(\App\SubCategories::orderby('id')->get() as $spe)
											@if(isset($listing->level))
													<option value="{{$spe->sub_category_name}}" <?php  if(isset($listing->level)){foreach($levels as $spec){ if($spec==$spe->sub_category_name){ echo 'selected';}}}?> >{{$spe->sub_category_name}}</option>
												@else
													<option value="{{$spe->sub_category_name}}">{{$spe->sub_category_name}}</option>
											@endif
										@endforeach
									</select>
                                </div> */ ?>
								<div class="form-group col-md-12">
                                    <label for="first" class="control-label">Level of Study:-</label>
									<?php if(isset($listing->level))
									$levels = explode(',',$listing->level); ?>
								<div class="form-group col-md-12">
									<input type="checkbox" value="all" id="levels" > Select All
								</div>	
										@foreach(\App\SubCategories::orderby('id')->get() as $i => $spe)
											@if(isset($listing->level))
											<div class="form-group col-md-6">
												<input class="checkBoxClass" id="Checkbox{{$i}}" type="checkbox" name="level[]" value="{{$spe->sub_category_name}}" <?php  if(isset($listing->level)){foreach($levels as $spec){ if($spec==$spe->sub_category_name){ echo 'checked';}}}?> /> {{$spe->sub_category_name}}
											</div>
												@else
												<div class="form-group col-md-6">
													<input class="checkBoxClass" id="Checkbox{{$i}}" type="checkbox" name="level[]" value="{{$spe->sub_category_name}}"> {{$spe->sub_category_name}}
												</div>	
											@endif
										@endforeach
									
                                </div>
								
                            <div id="avail_parent"> 
							@if(isset($listing->id))
							@foreach(\App\ListingsRank::where('listing_id',$listing->id)->get() as $i => $ListingRank)
							<div class="avail_Input @if($i==0) {{'active'}} @endif" id="avail_Input{{$i}}">
                                <div class="form-group col-md-6">
                                    <label for="first" class="control-label">Type of Rank:-</label>
                                    <select  class="form-control input-md ranktype" name="ranktype[]" id="ranktype{{$i}}" data-id="{{$i}}">
										<option value="">Select Type of Rank</option>
										@foreach(\App\RankType::orderby('id')->get() as $ranking)
										<option value="{{$ranking->id}}" <?php if($ListingRank->ranktype==$ranking->id){ echo 'selected="selected"'; } ?> >{{$ranking->title}}</option>
										@endforeach
									</select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="first" class="control-label">Rank:-</label>
									<select class="form-control input-md ranking" name="ranking[]" id="ranking{{$i}}"  data-id="{{$i}}">
										<option value="">Select Rank</option>
										<option value="{{$ListingRank->ranking}}" selected="selected">{{$ListingRank->ranking}}</option>
									</select>
                                </div>
							</div>
							@endforeach
							@else
								<div class="avail_Input active" id="avail_Input0">
									<div class="form-group col-md-6">
										<label for="first" class="control-label">Type of Rank:-</label>
										<select  class="form-control input-md ranktype" name="ranktype[]" id="ranktype1"  data-id="1">
											<option value="">Select Type of Rank</option>
											@foreach(\App\RankType::orderby('id')->get() as $ranking)
											<option value="{{$ranking->id}}">{{$ranking->title}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="first" class="control-label">Rank:-</label>
										<select class="form-control input-md ranking" name="ranking[]" id="ranking1" data-id="1">
											<option value="">Select Rank</option>
										</select>
									</div>
								</div>
							@endif
							</div>
							<div class="form-group col-md-12 text-right">
								<button  type="button"  title="Clone Form" class="avail_clone btn btn-default">+</button>
								<button type="button" class="avail_remove btn btn-default" title="Delete Form">-</button>
							</div>
                                 <div class="form-group col-md-12 inputs-university-page">
                                    <label for="first" class="control-label">Scholarship Available</label>
                                    Yes<input type="radio" class="form-control input-md" value="yes"  name="scolarship" id="title" <?php if(isset($listing->scolarship)){ if($listing->scolarship=='yes'){ echo 'checked' ; } } ?> >
 No<input type="radio" class="form-control input-md" value="no"  name="scolarship" id="title" <?php if(isset($listing->scolarship)){ if($listing->scolarship=='no'){ echo 'checked' ; } }?> >
                                </div>  
                                 <div class="form-group col-sm-12 height-section-select">
                                    <label for="first" class="control-label">Courses:-</label>
                               
                                    <select name="courses[]" multiple="multiple" id="Courses">
                                        <option value="all">All Courses</option>
										<?php if(isset($addedcourses )){ ?>
                                        @foreach($courses as  $course)
                                      <option  <?php foreach($addedcourses as  $addcourse){ if($course->id==$addcourse->course_id) { echo 'selected="selected"' ; } } ?> value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                               <?php }else{ ?>
                                          @foreach($courses as  $course)
                                       <option value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                   
                                    <?php }?>
									 </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Address :-</label>
                                    <textarea rows="7" placeholder="Address" name="address" id="summernote7" class="js-summernote form-control">{{ isset($listing->address) ? $listing->address : null }}</textarea>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="first" class="control-label">Contact Details :-</label>
                                    <textarea rows="7" placeholder="Contact Details" name="contact_details" id="summernote7" class="js-summernote form-control">{{ isset($listing->contact_details) ? $listing->contact_details : null }}</textarea>
                                </div>
                                 <div class="form-group col-sm-6">
                                    <label for="first" class="control-label">Country:-</label>
                                    
									<select class="form-control input-md" name="country" id="country">
									<option value="">Select Country...</option>
									@foreach(\App\Countries::orderBy('title')->get() as $countries)
										@if(isset($listing->country) && $listing->country==$countries->id)  
										  <option value="{{$countries->id}}" selected >{{$countries->title}}</option>
										   
										@else
										<option value="{{$countries->id}}">{{$countries->title}}</option> 
										@endif 
									 @endforeach
									</select>
                                </div>
								 <div class="form-group col-sm-6">
                                    <label for="first" class="control-label">City:-</label>
									<select class="form-control input-md" name="city[]" id="getcity" multiple="multiple">
										@if(isset($listing->city))
										<option value="all">All Cities</option>
										@foreach(\App\City::get() as $i => $cityy)    
											@if($listing->city==$cityy->city_name)  
												<option value="{{$cityy->city_name}}" selected >{{$cityy->city_name}}</option>
											@endif                          
										@endforeach
										@endif
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
                                <div class="form-group col-md-6 uploading-btnn">
                                    <label for="first" class="control-label">Featured Image :-</label>
                                    @if(isset($listing->featured_image))
                                    <input type="file" name="featured_image" id="input-file" class="form-control input-md" >

 @else
                   <input type="file" name="featured_image" id="input-file" class="form-control input-md" required='required'>
 @endif    
                                </div>
                                <div class="form-group col-md-6 ">
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
                                        
                                    <div class="media ">
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
                                            <input name="gallery_file[]" type="file" id="file" class="add-floating-imgs"/>
                                            <input type="button" id="add_more" class="upload " value="Add More Images"/>
                                        </div>
                                            
                                    </div> 
                                        
                                </div> 

    <div class="well-box">
              <h3 class="page-title">Video-1</h3>

                <div class="form-group col-md-12">                   
                  <textarea rows="3" placeholder="Video Embed Code" name="video"  class="form-control">{{ isset($listing->video) ? $listing->video : null }}</textarea>
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
                                
                            <div class="center mb20 sucss-btn-uni">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->  
 <script>
// clone div availability 
var avail_Index = $(".avail_Input").length+1;
//alert(avail_Index);
function avail_clone(){
	//cloning of form
	if(avail_Index<=70){
	$(".avail_Input.active").removeClass('active')
		.clone()
		.appendTo("#avail_parent")
		.attr("id", "avail_Input" +  avail_Index)
		.addClass('active')
		.find(".form-control")
		.each(function() {
			var id = this.id ;
			this.id = id + (avail_Index);
			$(this).val("");		
	});
	avail_Index++;
		if(avail_Index<=70){
			$("button.avail_remove").show();
		}else{
			$("button.avail_clone").hide();
		}
	}else{
		alert("maximum limit reached");
	}
}
function avail_remove(){
	if(avail_Index>=2){
	avail_dIndex=avail_Index-1;
	avail_ddIndex=avail_dIndex-1;
	$("#avail_Input"+avail_dIndex).remove();
	$("#avail_Input"+avail_ddIndex).addClass('active');
	avail_Index--;
		if(avail_Index>=2){
			$("button.avail_clone").show();
		}else{
			$("button.avail_remove").hide();
			
		}
	}else{
		alert("minimum limit reached");
	}
}
$(document).ready(function(){
$("button.avail_clone").on("click", avail_clone);
$("button.avail_remove").on("click", avail_remove);

});
// clone div availability end
</script>     
@else
<h1 style="color:red">You have not Sufficient permissions for access this page </h1> 
@endif  


@endforeach
        @endsection