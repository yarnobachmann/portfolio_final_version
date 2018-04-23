@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-over.css') }}" />
@endsection

@section('over')
  active
@endsection

@section('title')
    Over
@endsection

@extends('layout')

@section('content')


  <div class="col-4 left-banner no-padding-margin hide">
    <img src="{{ asset('/img/banners/over-cover.jpg') }}" class="banner-over animated-banner" alt="banner-over">
  </div>
  <div class="col-8 no-padding-margin" style="background-color: #c6314f; overflow: hidden;">
    <div class="nav-bar">
    @include('partials.navbar')
    <img src="{{ asset('/img/banners/over-front-cover.jpg') }}" class="yarno-svg animated-banner over-image" alt="Yarno">
    <img src="{{ asset('/img/banners/over-front.jpg') }}" class="yarno" alt="Yarno">

    <div class="offset-1 col-10 top-text">
      <p>{{ $about->section_1 }}</p>
    </div>
    <div class="offset-1 col-5 left-text">
      <p>{{ $about->section_2 }}</p>
    </div>
  </div>

@endsection

@section('js')
<script type="text/javascript">
  var banner = $('.banner-over');
  var image = $('.over-image');

  $(document).ready(function(){

    setTimeout(function(){
      banner.addClass('fadeOut');
    }, 5000);

    setTimeout(function(){
      image.addClass('fadeOut');
    }, 5000);

  });

</script>
@endsection
