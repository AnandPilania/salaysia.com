 <!DOCTYPE html>
<html lang="{{trans('messages.lang_name')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('head_title', getcong('site_name'))</title>
    <meta name="description" content="@yield('head_description', getcong('site_description'))" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('head_title',  getcong('site_name'))" />
    <meta property="og:description" content="@yield('head_description', getcong('site_description'))" />
    <meta property="og:keywords" content="@yield('head_keywords', getcong('site_description'))" />
    <meta property="og:image" content="@yield('head_image', url('/upload/logo.png'))" />
    <meta property="og:url" content="@yield('head_url', url('/'))" />
  
   
  <link rel="stylesheet" href="{{ URL::asset('site_assets/chosen_v1.6.2/docsupport/prism.css') }}"/>
  <link rel="stylesheet" href="{{ URL::asset('site_assets/chosen_v1.6.2/chosen.css') }}"/>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/style.css') }}">
    @if(trans('messages.lang_name')=="en")
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/style_en.css') }}">
    @elseif(trans('messages.lang_name')=="ar")
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/style_ar.css') }}">
    @endif
	<link href="{{ URL::asset('site_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @if(trans('messages.lang_name')=="ar")
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    @endif
	<link rel="stylesheet" href="{{ URL::asset('site_assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('site_assets/css/flaticon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/slick.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/slick-theme.css') }}"/>
  

  {{-- <link rel="stylesheet" href="{{ elixir('css/app.css')}}"> --}}

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  
  <link rel="shortcut icon" href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" type="image/x-icon">
  <style>
      body{
      position: static !important;
      }
      .goog-te-banner-frame.skiptranslate{
          display:none!important;
      }
  </style>

<link rel="stylesheet" href="{{ URL::asset('site_assets/css/livesearch.css') }}">


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    @include("_particles.header")
    @yield("content")
    @include("_particles.footer")
 @if(!classActivePathSite('add_my_university'))
    <script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-1.11.0.min.js') }}"></script>
  @endif
   <script src="{{ URL::asset('site_assets/js/cbpAnimatedHeader.min.js') }}"></script>
  <script src="{{ URL::asset('site_assets/js/classie.js') }}"></script>
  <script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('site_assets/js/slick.min.js') }}"></script>
{{--
  <script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery.searchabledropdown-1.0.8.min.js') }}"></script>
  --}}
  <script type="text/javascript" src="{{ URL::asset('site_assets/chosen_v1.6.2/chosen.jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('site_assets/chosen_v1.6.2/docsupport/prism.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('site_assets/js/typeahead.min.js') }}"></script>

 <script type="text/javascript">
    $(document).on('ready', function() { 
       res();
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 7
      });
       $(".variable").slick({
        dots: true,
        infinite: true,
       
		slidesToShow: 1,
        slidesToScroll: 1
      });
           $(window).resize(function() {
               res();
     
     });
//----------------------------------------type ahead--------------------------------------------------
var bestPictures = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('title'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
    url: '{{url("livesearch?query=")}}',//&category=all&location=all&level=all
    wildcard: '%QUERY',
    prepare: function(query, settings){
      cat = $($(".chosen-select")[0]).val();//category    
      loc = $($(".chosen-select")[1]).val();//location    
      lev = $($(".chosen-select")[2]).val();//level
      settings.url = settings.url + query + '&category='+cat+'&location='+loc+'&level='+lev;
      console.log('settings: ' + JSON.stringify(settings));
      return settings;
    }
  }
});

$('#custom-templates .typeahead').typeahead(null, {
  name: 'best-pictures',
  display: 'title',
  source: bestPictures,
  templates: {
    empty: [
      '<div class="tt-dropdown-menu">',
        'No matched courses',
      '</div>'
    ].join('\n'),
    suggestion: function(data){
      return '<div class="tt-dropdown-menu"><a href="\\courses\\'+data.course_slug+'\\'+data.id+'">' + data.title + '</a></div>';
    }
  }
});
//------------------------------------------------------------------------------------------
        function res(){
            var width = $(window).width(), height = $(window).height();
        if (width <= 1024 ) {
        $(".homepage-search-min").show();
            $(".homepage-search-max").hide();
            $(".search_btn_text").show();
        } else {
            $(".homepage-search-max").show();
        $(".homepage-search-min").hide();
            $(".search_btn_text").hide();
        }
        }
        $(".university").hide();

       $(".chosen-select").chosen({
          search_contains: true,
          width: "100%"
      });

    });
  </script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


  @yield('footer_scripts')
</body>
</html>