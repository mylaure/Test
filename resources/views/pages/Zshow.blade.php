@extends('main')

{{-- @section('title','| Homepage') --}}

@section('stylesheets')
  {{-- <link rel="stylesheet" href="css/jquery.fullPage.css">
  <link rel="stylesheet" href="css/cssReset.css"> --}}
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.css">
@endsection

@section('head_javascript')
  <script src="../public/js/jquery-1.8.3.min.js"></script>
  {{-- 发布项目时更改为fullPage.min.js --}}
  <script src="js/jquery.fullPage.js"></script>
  <script>
  $(function(){
    $('#dowebok').fullpage({
      sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90','#1bbc9b', '#4BBFC3'],
      'navigation': true,
      onLeave: function(index, nextIndex, direction){
         if($('.nav-side').hasClass('show')){
              $('.nav-side').animate({ 'left': '-17%'}, 500).removeClass('show');
        }
      }
    });
  });
  </script>
@endsection

@section('content')

  <h4>
    <a href="/">⬅️返回首页</a>
  </h4>
<div class="img">
          <img src="images/aboutUs-2.png">
    </div> 
  <h1 style="text-align: center; margin-top: 50px;">{{ $event->title }}</h1>
  <hr>
  <div id="content" style="padding: 50px;">
    
    <p>
      {{ $event->body }}
    </p>
    <p>
      {{ $event->location }}
    </p>
    <p>
    {{ $event->date }}
    </p>
    <p>
    {{ $event->body }}
    </p>
  </div>
@endsection