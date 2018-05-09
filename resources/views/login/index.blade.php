@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form row">
            <div class="form-horizontal col-md-offset-3" id="login_form">
                <h3 class="form-title" style="text-indent:30%;">{{ trans('user.reg') }}</h3>
                <div class="col-md-9">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                            <i class="fa fa-user fa-lg"></i>
                            <input class="form-control required" type="text" placeholder="{{ trans('user.username') }}" id="name" name="name" autofocus="autofocus" />
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock fa-lg"></i>
                            <input class="form-control required" type="password" placeholder="{{ trans('user.pwd') }}" id="password" name="password" />
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
@endsection