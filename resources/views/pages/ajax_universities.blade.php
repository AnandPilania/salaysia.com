<?php 

if($universities!='[]'){ ?>
@foreach($universities as $i => $university )    
                                 
     <li class="clearfix">   <div class="col-sm-2">
				<div class="university-img-logo">
					<img src="{{ URL::asset('upload/listings/'.$university->featured_image.'-s.jpg') }}"/>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="university-description">
		<h4><a href="{{URL::to('universities/'.$university->listing_slug.'/'.$university->id)}}" class="title">{{$university->title}}</a></h4>
					<p>
					<i class="fa fa-map-marker " aria-hidden="true"></i>
				{{$university->country}} <i class="fa fa-eye padding-left-icn" aria-hidden="true"></i>
				{{$university->view_count}} VIEWS
				<i class="fa fa-comment padding-left-icn" aria-hidden="true"></i>
			@for($x = 0; $x < 5; $x++)
                  
                    @if($x < $university->review_avg)
                      <i class="fa fa-star"></i>
                    @else
                      <i class="fa fa-star-o"></i>
                    @endif
                   
                    @endfor
					</p>
                                         <p>{!! str_limit($university->description, $limit = 250) !!}</p>				
                                </div>
			</div>
			<div class="col-sm-3">
				<div class="shortlist-block">
				<p class="short-icon">Shortlist <i class="fa fa-heart-o" aria-hidden="true"></i></p>
				</div>
			</div>
			<button type="button" data-toggle="modal" data-target="#ContactInsitute" class="contact-inst-btn pull-right">CONTACT INSTITUTION</button>
                 </li>                                  
@endforeach

<?php }else{ echo "<li class='clearfix'><h1>No Records Exist In This Country</h1></li>"; } ?>