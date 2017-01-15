<?php 

if($courses!='hello'){ ?>
  @foreach($courses as $course) 	
			<li class="clearfix">
			<div class="col-sm-2 noppading">
				<div class="featured-tag">
					<img src="{{ URL::asset('site_assets/images/featured-tag.png') }}"/>
				</div>
				<div class="university-img-logo">
					<img src="{{ URL::asset('upload/listings/'.$course->featured_image.'-s.jpg') }}"/>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="university-description">
					<h4>
                                        <a class="clearfix" href="{{URL::to('courses/'.$course->course_slug.'/'.$course->id)}}" class="title">{{$course->title}}</a>
                                        </h4>
					<p>
					<i class="fa fa-graduation-cap " aria-hidden="true"></i>
                                    {{$course->level}} 
				 
					<i class="fa fa-clock-o" aria-hidden="true"></i> {{$course->type}}
					<i class="fa fa-calendar" aria-hidden="true"></i> START.{{$course->start_from}}
					<i class="fa fa-tag" aria-hidden="true"></i> ${{$course->fees}} per year</p>
                                             <p>{!! str_limit($course->description, $limit = 250) !!}</p>			
                                </div>
			</div>
			<div class="col-sm-3">
				<div class="shortlist-block">
					<p class="short-icon">Shortlist <i class="fa fa-heart-o" aria-hidden="true"></i>
					</p>
					
				</div>
			</div>
			
			</li>
		 @endforeach  	

<?php }else{ echo "<li class='clearfix'><h1>No Records Exist In This Country</h1></li>"; } ?>