<!-- resources/views/auth/login.blade.php -->
@extends('layouts.auth_master')

@section('page-title')
登录 - {!! Config::get('default.name') !!}
@endsection

@section('header-styles')
@endsection

@section('header-scripts')
@endsection

@section('body-class')
class="hold-transition login-page"
@endsection

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#">{!! Config::get('default.name') !!}</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">登录</p>

        <form action="/auth/login" method="post">
            {!! csrf_field() !!}

            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="请在此输入Email" name="email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="请在此输入密码" name="password" id="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-4">
                <a href="/auth/register" class="btn btn-default btn-block btn-flat">注册</a>
                </div>
                <!-- /.col -->
                <div class=" col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
@endsection

@section('footer-scripts')
<script >

</script>
@endsection