<!-- resources/views/auth/register.blade.php -->
@extends('layouts.auth_master')

@section('page-title')
登录 - {!! Config::get('default.name') !!}
@endsection

@section('header-styles')
@endsection

@section('header-scripts')
@endsection

@section('body-class')
class="hold-transition register-page"
@endsection

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="#">{!! Config::get('default.name') !!}</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">注册</p>

        <form action="/auth/register" method="post">
            {!! csrf_field() !!}

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="请在此填写名称" name="name" value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="请在此填写Email" name="email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="请在此填写密码" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="请在此确认密码" name="password_confirmation">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-4 col-xs-offset-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.form-box -->
</div>
@endsection

@section('footer-scripts')
<script >

</script>
@endsection