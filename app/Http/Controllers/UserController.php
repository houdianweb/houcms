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
// | User
// +----------------------------------------------------------------------
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setting(){
        return view('user.setting');
    }
    public function settingStore(){
        return view('user.settingstore');
    }
}
