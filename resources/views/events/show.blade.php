@extends('main')

@section('title','| Homepage')

@section('stylesheets')
      {{-- <link rel="stylesheet" href="/css/bootstrap.css">
      <link rel="stylesheet" href="/css/cssReset.css">
      <link rel="stylesheet" href="/css/main.css"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/main.css"> --}}
@endsection


@section('content')

  <div class="show">
      <div class="img">
            {{-- <img src="images/aboutUs-2.png"> --}}
            {!! HTML::image('images/aboutUs-2.png') !!} 
      </div> 
      
      <div class="fixImageLeft">
      <a href="/event">{!! HTML::image('images/Return.png') !!} </a>  
      </div>
      <h1>{{ $event->title }}</h1>
      <div id="content">
        <div class="showDate fl">
          <p>{{ $event->date }}<span>|</span></p>
        </div>
        <div class="showTag">
          <p>{{ $event->brief }}</p>
        </div>
        <div class="showBody">
          <p>&emsp;&emsp;{{ $event->body }}</p>
        </div>
        
        
      </div>
  </div>

@endsection