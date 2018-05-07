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

//文章分组
Route::group(['prefix'=>'article'],function (){
    Route::get('/','\App\Http\Controllers\ArticleController@index');
    Route::get('/{post}','\App\Http\Controllers\ArticleController@show');
    Route::get('/create','\App\Http\Controllers\ArticleController@create');// 创建文章
    Route::post('/','\App\Http\Controllers\ArticleController@store');
    Route::get('/{post}/edit','\App\Http\Controllers\ArticleController@edit'); // 编辑文章
    Route::put('/{post}','\App\Http\Controllers\ArticleController@update'); // 编辑文章
    Route::get('/delete','\App\Http\Controllers\ArticleController@delete');// 删除文章
});