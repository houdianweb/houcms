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
// | Reg
// +----------------------------------------------------------------------
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class RegController extends Controller
{
    public function index(){
        return view('reg.index');
    }
    public function reg(){
        //验证
        $this->validate(request(),[
            'name'     => 'required',
            'email'    => 'email',
            'mobile'   => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        //逻辑
        $name     = request('name');
        $email    = request('email');
        $mobile   = request('mobile');
        $password = bcrypt(request('password'));
        $user     = User::create(compact('name','email','mobile','password'));

        return redirect('/login');
    }
}