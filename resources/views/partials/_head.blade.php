<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BRNA - @yield('title')</title>  <!-- CHANGE THIS TITLE FOR EACH PAGE-->

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
{{--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    
    {{-- <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cssReset.css">
    <link rel="stylesheet" href="css/main.css"> --}}

    {{-- <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/cssReset.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/main.css"> --}}

    {{-- use collectiveHTML 上面的是老版本的路径，这个更短有没有？！！所以说写代码也要自 high啊！！！--}}
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/cssReset.css') !!}
    {{-- {!! HTML::style('css/main.css') !!} 这个是pc端端--}}
    {!! HTML::style('css/mobileMain.css') !!}   {{-- 我是移动端的 --}}
    {{-- <link rel="stylesheet" media="screen and (max-width: 480px)" href="{{ URL::asset('/') }}css/mobileMain.css"> --}}

    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/main.css"> --}}
    @yield('stylesheets')
    
    {{-- <script src="{{ URL::asset('/') }}js/jquery-1.8.3.min.js"></script> --}}
    {{-- 发布项目时更改为fullPage.min.js --}}
    {{-- <script src="{{ URL::asset('/') }}js/jquery.fullPage.js"></script> --}}

    {{-- use collectiveHTML 上面的是老版本的路径，这个更短有没有，所以说写代码也要自 high啊！！！--}}
    {!! HTML::script('js/jquery-1.8.3.min.js') !!}
    {{-- 发布项目时更改为fullPage.min.js --}}
    {!! HTML::script('js/jquery.fullPage.js') !!}
    
    <script>
    $(function(){
        $('#dowebok').fullpage({
            // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90','#1bbc9b', '#4BBFC3', '#7BAABE'],
            sectionsColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff','#ffffff', '#ffffff', '#ffffff'],
            anchors: ['page1', 'page2', 'page3', 'page4','page5', 'page6', 'page7'], 
            menu: '#menu',
            'navigation': true,
            onLeave: function(index, nextIndex, direction){
                 if($('.nav-side').hasClass('show')){
                      $('.nav-side').animate({ 'left': '-117%'}, 500).removeClass('show');
                }
            }
        });
        //adding the move down action to the button
        $(document).on('click', '#moveDown', function(){
        $.fn.fullpage.moveSectionDown();
        });
    });
    </script>

    @yield('head_javascript')
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>