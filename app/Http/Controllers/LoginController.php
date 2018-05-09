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
// | Login
// +----------------------------------------------------------------------
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function login(){
        //验证
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required',
            'remember' => 'integer'
        ]);

        //逻辑
        $user = request(['name','password']);
        $remember = boolval(request('remember'));
        if(\Auth::attempt($user,$remember)){
            return redirect('/');
        }
        return \Redirect::back();
    }
    public function logout(){
        \Auth::logout();
        return redirect('/login');
    }
}
