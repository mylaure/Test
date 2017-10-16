<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('page-title')</title>
    {{-- 
    {!! HTML::style('build/css/bootstrap.min.css') !!}
    {!! HTML::style('build/css/AdminLTE.min.css') !!}
    {!! HTML::style('build/css/font-awesome.min.css') !!} --}}

    {{-- 自定义样式 --}}
    {{--
    <link rel="stylesheet" href="{!! elixir('css/admin.css') !!}">

    {!! HTML::script('build/js/jquery.min.js') !!}
    {!! HTML::script('build/js/bootstrap.min.js') !!} --}}

    {{-- javascript --}}
    {{-- <script src="{!! elixir('js/admin.js') !!}"></script> --}}
    
    @yield('header-styles')

    @yield('header-scripts')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body @yield('body-class') >
    
    @yield('content')

    @yield('footer-scripts')
</body>
</html>
