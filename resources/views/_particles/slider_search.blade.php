<section class="bottom-banner bg-cream clearfix">
    <script>
        function searchType()
{
 var type=$(".searchType").val();

 $(".search-key").html(type);
  if(type=='Courses')
  {   $(".bg-white-search").removeClass('bg-search');
      $(".university").addClass('hidden');
      $(".university").hide();
      $(".country").removeClass('hidden');
      $(".course").removeClass('hidden');
      $(".level").removeClass('hidden'); 
      $(".level1").attr('required','required');
      $(".country1").attr('required','required');
      $(".course1").attr('required','required');
      $(".university1").removeAttr('required','required'); 
  }
  if(type=='Universities')
  {     
      $(".bg-white-search").addClass('bg-search');
      $(".university").removeClass('hidden');
      $(".university").show();

      $(".country").removeClass('hidden');
      $(".course").addClass('hidden');
      $(".level").addClass('hidden');

      $(".university1").attr('required','required');
      $(".country1").attr('required','required');
      $(".course1").removeAttr('required','required');
      $(".level1").removeAttr('required','required');
  }
  if(type=='Scholarships')
  {
      $(".bg-white-search").addClass('bg-search');
      $(".country").removeClass('hidden');
      $(".level").removeClass('hidden');
      $(".course").addClass('hidden');
      $(".university").addClass('hidden');
      $(".level1").attr('required','required');
      $(".country1").attr('required','required');
      $(".course1").removeAttr('required','required');
      $(".university1").removeAttr('required','required');
  }
}
    </script>
    <div class="boxes clearfix">
        <div class="col-sm-12 text-center ">
            <h1 class="hc_hdr" id="searchhomeLabelId">
                {{trans('messages.find_course')}}
            </h1>
            <div class="bg-white bg-white-search clearfix padding-box">
                {!! Form::open(array('url' => 'listings/search','class'=>'','id'=>'search','role'=>'form')) !!}
                <div class=" ">
                    <ul>

                    <li class=" course">
                      <div class="form-group course-fg" id="custom-templates">
                                     <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Query">
                      </div>
                    </li>

                        <li class=" course">
                            <div class="form-group ">
                            

                                <select class="form-bg course1 chosen-select" data-placeholder="Choose a course ..." id="sel1" name="category" required="required">
                                    <option value="all">
                                        {{trans('home.all_courses')}}
                                    </option>
                                    @foreach(\App\Categories::orderBy('id')->get() as $category)
                                    <option value="{{$category->category_name}}">
                                        {{$category->category_name}}
                                    </option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </li>
                        <li class=" country">
                            <div class="form-group ">
                                <select class="form-bg country1 chosen-select" data-placeholder="Choose a country..." id="sel2" name="location" required="required">
                                    <option value="all">
                                        {{trans('home.all_country')}}
                                    </option>
                                    @foreach(\App\Countries::orderBy('title')->get() as $country)
                                    <option value="{{$country->title}}">
                                        {{$country->title}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li class=" level">
                            <div class="form-group ">
                                <select class="form-bg level1 chosen-select" data-placeholder="Choose a level ..." id="sel3" name="level" required="required">
                                    <option value="all">
                                        {{trans('home.all_level')}}
                                    </option>
                                    @foreach(\App\SubCategories::orderby('id')->get() as $aes)
                                    <option value="{{$aes->sub_category_name}}">
                                        {{$aes->sub_category_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                    </ul>
                    <button aria-label="Left Align" class="btn btn-default search_btn" type="submit">
                        <span aria-hidden="true" class="glyphicon glyphicon-search">
                        </span>
                        <span class="search_btn_text">
                            {{trans('messages.search')}}
                        </span>
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>