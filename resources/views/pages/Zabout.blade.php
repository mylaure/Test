
@extends('main')

@section('title','| about')

@section('content')

      <div class="about_Us">
        <div class="img">
          {!! HTML::image('images/aboutUs-2.png') !!} 
        </div> 

        <div class="aboutUs_des">
        	<h1>ABOUT BRNA</h1>
        	{{-- <h3>I am a small title</h3> --}}
   {{--      	<br>
          <br>
          <br> --}}
          <p>由国际视通倡议成立、于2017年5月14日正式启动的“一带一路”新闻合作联盟(The Belt and Road News Alliance, BRNA)，截止到2017年7月10日，“一带一路”沿线27个国家及地区的40家媒体机构已声明加入BRNA。</p>
            <br>
            <p>希望通过整合媒体资源，促进跨国界，跨地区信息的有效传播，并借由媒体间的新闻共享及人员，信息，技术，文化的交流，促进一带一路沿线媒体的共同成长，提升一带一路沿线媒体整体传播力和国际影响力，为一带一路沿线国家迈向命运共同体，提升一带一路人民的共同福祉贡献力量。</p>
        </div>
      </div><!-- end of .about_Us-->  
@endsection