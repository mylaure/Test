<style>
/*移动端*/
.navbar-fixed-top{ border-width: 0; }
.navbar{ height: 50px; text-align: center; overflow: hidden;background-color: #1D71B4;margin-bottom: 0 !important;}
.navbar-side-toggle{ float: left; font-size: 24px; padding: 0 14px; padding-top: 10px; vertical-align: middle; display: inline-block; color: #fff;}
.nav-side{ position: fixed; left: -117%; top: 50px; width: 100%; height: 50%; background-color: #E9E9E9; opacity:0.8;/*box-shadow: -3px 2px 11px 2px #333 inset;*/z-index: 999;padding-top: 20px; }
.nav-side #nav{ text-align:left; width: 100%; padding:15px 15px 0px 15px;text-align: center;/*font-size: 12px;*//*padding: 20px 15px; border-bottom: 1px solid #464646;*/}
.nav-side li a{color: #1D71B4; text-decoration: none;}
.nav-side #navTop{padding:20px 15px 0px 15px;}
.nav-side #nav-small{font-size: 10px;padding:10px 15px 0px 15px;}
.nav-side li a:hover {font-weight: bold;}
#logo{ display: inline-block; margin-top: 13px; margin-left: 60px; }
.language{ float: right; height: 100%; line-height: 50px;color: #fff;}
.language span{ display: inline-block; width: 50px; /*50px 比较好看*/font-weight: bold;}
.language span.active{ background-color: #004F84;/*font-weight: bold;*/}
</style>

<!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="navigation-all">  {{-- class="navbar navbar-default" --}}
        <!-- Brand and toggle get grouped for better mobile display -->
        {{-- <div class="navbar-header"> --}}
          {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BRNA</a> --}}
          <div class="navbar-side-toggle" id="glyphicon"><span class="glyphicon glyphicon-menu-hamburger" ></span></div>
          <ul class="nav-side" id="navside">
            <li class="active" id="navTop"><a href="/">HOME</a></li>
            <li id="nav"><a href="/#page2">ABOUT US</a></li>
            <li id="nav"><a href="/service">SERVICE</a></li>
            <li id="nav"><a href="/membership">MEMBERSHIP</a></li>
            <li id="nav"><a href="/event">EVENT</a></li>
            <li id="nav-small"><a href=""><span>|</span> MEETING</a></li>
            <li id="nav-small"><a href=""><span>|</span> NEWS</a></li>
            <li id="nav"><a href="/#page7">CONTACT US</a></li>
            <li id="nav"><a href="http://www.cctvplus.com" target="_blank">LOG IN链接到GDS</a></li>
          </ul>
          <div id="logo">
          {{-- <img src = "images/logo.png"> --}}
          {!! HTML::image('images/logo.png') !!} 
          </div>
          <div class="language">
            <span class="en">EN</span>
            <span class="en active">中文</span>
          </div>
        {{-- </div> --}}
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        {{-- <div class="collapse navbar-collapse">  --}}
         {{--  <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/event">Event</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul> --}}
          {{-- <h1 class="logo"><a href="http://www.cctvplus.com/"></a><img src = "images/logo.png" ></h1> --}}

{{--           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul> --}}

       <!-- </div> /.navbar-collapse -->
     <!-- </div> /.container-fluid -->
    </nav>

{{-- pc端 --}}
{{-- <script>
  $('.navbar-side-toggle').click(function(){   
    if(!$('.nav-side').hasClass('show')){
     $('.nav-side').animate({ 'left': '0'}, 500).addClass('show');
    }else{
      $('.nav-side').animate({ 'left': '-17%'}, 500).removeClass('show');      
    }
  });
  $('.language span').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
  });
</script> --}}

{{-- 移动端 --}}
<script>
  $('.navbar-side-toggle').click(function(){   
    if(!$('.nav-side').hasClass('show')){
     $('.nav-side').animate({ 'left': '0'}, 500).addClass('show');
    }else{
      $('.nav-side').animate({ 'left': '-117%'}, 500).removeClass('show');      
    }
  });
  $('.language span').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
  });
</script>