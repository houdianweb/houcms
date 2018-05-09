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
use \App\ArticleDetail;

class ArticleController extends Controller
{
    public $timestamps = true;
    //文章列表
    public function index(){
        return view("article/index");
    }
    //文章详情
    public function show(){
        return view("article/show");
    }
    //文章新建
    public function create(){
        return view("article/create");
    }
    //文章列表
    public function store(){
        //
        $this->validate(request(),[
            'title' =>'required|string|max:200|min:3',
            'content' =>'required|string|max:1000|min:3',
            'descr' =>'required|string|max:500|min:3',
        ]);
        //
        $uid = \Auth::id();
        $data = array_merge(request(['title','content','descr','click']),compact('uid'));
        $article = new Article();
        $aid = $article->adds($data);
        $data['aid'] = $aid;
        $articleDetail = new ArticleDetail($data);
        $articleDetail->adds($data);
        return redirect("article")->with('status', 'Update Success! 成功！ :)');;
    }
    //文章列表
    public function edit(){
        return view("article/edit");
    }
    //文章更新
    public function update(){
        return view("article/update");
    }
    //删除文章
    public function delete(){
        return view("article/delete");
    }
}
