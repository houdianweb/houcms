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
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Article;

class ArticleController extends Controller
{
    //文章列表
    public function index(){
        $articles = Article::orderBy('created_at','desc')->get();
        var_dump($articles);
        return view("post/index");
    }
    //文章详情
    public function show(){
        return view("post/show");
    }
    //文章新建
    public function create(){
        return view("post/create");
    }
    //文章列表
    public function store(){
        return view("post/store");
    }
    //文章列表
    public function edit(){
        return view("post/edit");
    }
    //文章更新
    public function update(){
        return view("post/update");
    }
    //删除文章
    public function delete(){
        return view("post/delete");
    }
}
