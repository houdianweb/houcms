<?php
// +----------------------------------------------------------------------
// | HOUCMS [ 厚匠科技 专注建站 APP PC 微站 小程序 WAP ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://www.houjit.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Amos <447107108@qq.com> http://www.houjit.com
// +----------------------------------------------------------------------
// | Web Route
// +----------------------------------------------------------------------

Route::get('/', '\App\Http\Controllers\ArticleController@index');

//登录注册
Route::get('/reg','\App\Http\Controllers\RegController@index'); //注册页面
Route::post('/reg','\App\Http\Controllers\RegController@reg'); //注册行为
Route::get('/login','\App\Http\Controllers\LoginController@index'); // 登录页面
Route::post('/login','\App\Http\Controllers\LoginController@login'); // 登录行为
Route::get('/logout','\App\Http\Controllers\LoginController@logout'); // 登出行为

//会员中心
Route::group(['prefix'=>'user'],function (){
    Route::get('/my/setting','\App\Http\Controllers\UserController@setting'); //个人设置页面
    Route::post('/my/setting','\App\Http\Controllers\UserController@settingStore'); //个人设置操作
});

//文章分组
Route::group(['prefix'=>'article'],function (){
    Route::get('/','\App\Http\Controllers\ArticleController@index');
    Route::get('/show','\App\Http\Controllers\ArticleController@show');
    Route::get('/create','\App\Http\Controllers\ArticleController@create');// 创建文章
    Route::post('/save','\App\Http\Controllers\ArticleController@store');
    Route::get('/{post}/edit','\App\Http\Controllers\ArticleController@edit'); // 编辑文章
    Route::put('/{post}','\App\Http\Controllers\ArticleController@update'); // 编辑文章
    Route::get('/delete','\App\Http\Controllers\ArticleController@delete');// 删除文章
});