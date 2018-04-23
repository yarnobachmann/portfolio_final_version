@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-webdesign.css') }}" />
@endsection

@section('webdesign')
  active
@endsection

@section('title')
    Webdesign
@endsection

@extends('layout')

@section('content')


  <div class="col-1 left-bar no-padding-margin">
    <img src="{{ asset('/img/arrow/arrow.svg') }}" class="arrow1" alt="arrow">
    <img src="{{ asset('/img/arrow/arrow.svg') }}" class="arrow2" alt="arrow">
  </div>
  <div class="col-11 no-padding-margin uppercase" id="scroll" style="background-color: #c6314f; overflow-y:scroll; overflow-x:hidden;">
    <div class="nav-bar">
    @include('partials.navbar')
    <div class="space">

      </div>

      @foreach($projects as $project)
      <div class="bar-project offset-1 col-10" style="padding: 0; background-color: transparent; margin-bottom: 5%;">
      <a href="{{ url('/webdesign') }}/{{ $project->name }}" class="col-12 anchor no-padding-margin">
        <div class=" d-none animated bar-project col-12" style="">
          <div class="no-padding-margin project" style="background-color: rgba(3, 3, 3, 0.80); height: 100%; width: 100%; position:absolute;">
            <h1>{{$project->name}}</h1>
          </div>
          <img src="/storage/{{$project->image}}" style="height:80%;" alt="">
        </div>
      </a>
      </div>
      @endforeach


      <div class="space-bottom">

      </div>

    </div>
  </div>

@endsection

@section('js')
<script>
  $(document).ready(function() {
    $(".arrow2").click(function(event){
      $('#scroll').animate({scrollTop: '+=150px'}, 300);
    });
    $(".arrow1").click(function(event){
      $('#scroll').animate({scrollTop: '-=150px'}, 300);
    });

    var bars = [];
    $('.bar-project').each(function(index, object) {
        bars.push(object);
    });

    var project = $('.bar-project');
    var hidden = 'd-none';
    var index = 0;

    setTimeout(function(){
      var interval = setInterval(function() {

        $(bars[index]).removeClass(hidden).addClass('slideInUpBig');

        index++;
          if(index == bars.length){
              clearInterval(interval);
          }
        }, 250);
    }, 100);


  });
</script>
@endsection
