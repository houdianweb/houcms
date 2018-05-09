@extends('layouts.app')
@section('content')
<div class="container">
    <div class="form row">
        <div class="form-horizontal col-md-offset-3" id="login_form">
            <h3 class="form-title" style="text-indent:30%;">{{ trans('user.reg') }}</h3>
            <div class="col-md-9">
                <form action="/reg" method="post">
                    @csrf
                    <div class="form-group">
                        <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" required type="text" placeholder="{{ trans('user.username') }}" id="name" name="name" autofocus="autofocus" maxlength="20"/>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" required type="text" placeholder="{{ trans('user.mobile') }}" id="mobile" name="mobile" maxlength="20"/>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" required type="text" placeholder="{{ trans('user.email') }}" id="email" name="email" maxlength="20"/>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock fa-lg"></i>
                        <input class="form-control required" required type="password" placeholder="{{ trans('user.pwd') }}" id="password" name="password" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock fa-lg"></i>
                        <input class="form-control required" required type="password" placeholder="{{ trans('user.pwd') }}" id="repassword" name="password_confirmation" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" value="1"/>{{ trans('user.remember') }}
                        </label>
                    </div>
                    @include('layouts.error')
                    <div class="form-group col-md-offset-9">
                        <button type="submit" class="btn btn-success pull-right" name="submit">{{ trans('common.submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    body{
        background: url("{{ asset('images/login/bg1.jpg') }}");
        animation-name:myfirst;
        animation-duration:12s;
        /*变换时间*/
        animation-delay:2s;
        /*动画开始时间*/
        animation-iteration-count:infinite;
        /*下一周期循环播放*/
        animation-play-state:running;
        /*动画开始运行*/
    }
    @keyframes myfirst
    {
        0%   {background:url("{{ asset('images/login/bg1.jpg') }}");}
        34%  {background:url("{{ asset('images/login/bg2.jpg') }}");}
        67%  {background:url("{{ asset('images/login/bg3.jpg') }}");}
        100% {background:url("{{ asset('images/login/bg4.jpg') }}");}
    }
    .form{background: rgba(255,255,255,0.2);width:400px;margin:120px auto;}
    /*阴影*/
    .fa{display: inline-block;top: 27px;left: 6px;position: relative;color: #ccc;}
    input[type="text"],input[type="password"]{padding-left:26px;}
    .checkbox{padding-left:21px;}
</style>
@endsection