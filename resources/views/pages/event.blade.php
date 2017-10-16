@extends('main')

@section('title','| event')

@section('content')
	<div class="eventTitle">
		<div class="img">
          {!! HTML::image('images/aboutUs-2.png') !!} 
        </div> 
	</div>
	{{-- <hr> --}}
	<div id="event">
		<h1>联盟大事记</h1>
		{{-- <div class="event_title">
        	
        </div> --}}
        				{{-- <div class="event" id="event1">
							<img src = "images/arrow.png" >
							<div class="eventDes">
								<div class="eventContent">
									<h2>假装我是一个很长很长的标题</h2>
									<h3>May 1st, 2017</h3>
									<p>Tag</p>
								</div>
							</div>
						</div> --}}
		<div class="eventList">
		
			<div class="col-md-4">
				@foreach ($events as $event)
				<div class="img">
					{!! HTML::image('images/arrow.png') !!}   {{-- 啊啊啊，要在后台加上传图片的功能啊啊啊！！！试试用collectiveHTML吧！！！ --}}
				</div>
				<div class="eventListDes">
					<div class="title">
						<a href="{{ URL('events/'.$event->id) }}">
							<h2>{{ $event->title }}</h2>
						</a>
					</div>
					<div class="date fl">
						<h3>{{ $event->date }}<span>|</span></h3>
					</div>
					
					<div class="tag">   {{-- 以后将brief改成tag --}}
							<p>{{ $event->brief }}</p>
					</div>	
				</div>

				@endforeach
				<div class="clearbox"></div>
			</div>
			
		</div>
		
	</div>
@endsection
