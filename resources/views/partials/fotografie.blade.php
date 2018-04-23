@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-fotografie.css') }}" />
@endsection

@section('fotografie')
  active
@endsection

@section('title')
    Fotografie
@endsection

@extends('layout')

@section('content')


  <div class="col-1 left-bar no-padding-margin" style="height:  100%;">
    <img src="{{ asset('/img/arrow/arrow.svg') }}" class="arrow1" alt="arrow">
    <img src="{{ asset('/img/arrow/arrow.svg') }}" class="arrow2" alt="arrow">
  </div>
  <div class="col-11 no-padding-margin uppercase" id="scroll" style="background-color: #c6314f; overflow-y:scroll; overflow-x:hidden;">
    <div class="nav-bar">
    @include('partials.navbar')
    <div class="offset-5 d-none" id="gallery">
      @foreach($images as $image)
        <img alt="{{$image->title}}" src="/storage/{{$image->image}}"
  				data-image="/storage/{{$image->image}}">
      @endforeach
		</div>


@endsection

@section('css')



	<link rel='stylesheet' href="{{ asset('/plugins/unitegallery/dist/themes/default/ug-theme-default.css') }}" type='text/css' />
@endsection

@section('js')
<script type='text/javascript' src="{{ asset('/plugins/unitegallery/dist/js/unitegallery.js') }}"></script>
<link rel='stylesheet' href="{{ asset('/plugins/unitegallery/dist/css/unite-gallery.css') }}" type='text/css' />
<script type='text/javascript' src="{{ asset('/plugins/unitegallery/dist/themes/tiles/ug-theme-tiles.js') }}"></script>
<link rel='stylesheet' 	href='/plugins/unitegallery/dist/skins/alexis/alexis.css' type='text/css' />
  <script type="text/javascript">

  jQuery(document).ready(function(){
    jQuery("#gallery").unitegallery({
    tiles_type:"nested",
    gallery_width:"70%",
    tiles_nested_optimal_tile_width: 400,
    tiles_space_between_cols: 15,
		tiles_space_between_cols_mobile: 5,
    tile_enable_action:	true,
    tile_enable_overlay: true,
		tile_overlay_opacity: 0.4,
		tile_overlay_color: "#000000",
    tile_enable_textpanel:true,
	  tile_textpanel_bg_color: "#2b2d2c",
	  tile_textpanel_bg_opacity:0.8,
	  tile_textpanel_title_color: "white",
	  tile_textpanel_title_text_align: "center",
    theme_enable_preloader: false,
  });
  });

  jQuery(document).ready(function(){
    var div = $('#gallery');
    var img = $('.ug-thumb-image');



    setTimeout(function(){
      div.removeClass('d-none');
    }, 100);


});
  </script>
  <script>

    $(document).ready(function() {
      $(".arrow2").click(function(event){
        $('#scroll').animate({scrollTop: '+=150px'}, 300);
      });
      $(".arrow1").click(function(event){
        $('#scroll').animate({scrollTop: '-=150px'}, 300);
      });
    });
  </script>


@endsection
