@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <form action="/article/save" class="form-horizontal" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="col-sm-2 col-md-2 col-lg-2 control-label">标题</label>
                        <div class="col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descr" class="col-sm-2 control-label">简介</label>
                        <div class="col-sm-10">
                            <input type="text" name="descr" class="form-control" id="descr">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-sm-2 control-label">内容</label>
                        <div class="col-sm-10">
                            <textarea name="content" class="form-control" rows="5" id="content"></textarea>
                        </div>
                    </div>
                    @include('layouts.error')
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button type="submit" class="btn btn-default">提交</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

            </div>
            <!-- right -->
        </div>
    </div>
@endsection