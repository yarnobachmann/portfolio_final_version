@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-project.css') }}" />
@endsection

@section('webdesign')
  active
@endsection

@section('title')
    Over {{ $project_view[0]->project_name }}
@endsection

@extends('layout')

@section('content')




  <div class="col-12 no-padding-margin" style="background-color: #c6314f; overflow-y: auto; overflow-x: hidden;">
    <img src="/storage/{{ $project[0]->image }}" class="project-logo" alt="">
    <img src="/storage/{{ $project_view[0]->side_image }}" class="banner-project hide" alt="banner-project">
    @if($project_view[0]->right_image == null)

    @else
    <img src="/storage/{{ $project_view[0]->right_image }}" class="image-project hide" alt="image-project">
    @endif

    <div class="nav-bar">
    @include('partials.navbar')

    <div class="offset-4 col-3 top-text">
      <p>{{ $project_view[0]->section_1 }}</p>
    </div>
    <div class="offset-8 col-3 left-text" style="margin-bottom: 2%;">
      <p>{{ $project_view[0]->section_2 }}</p> @if($project_view[0]->link_website == null)@else<a href="{{ $project_view[0]->link_website }}" target="_blank" style="text-decoration:underline; color:#292b2c;">{{ $project_view[0]->project_name }}</a> @endif
    </div>
  </div>

@endsection

@section('js')

@endsection
