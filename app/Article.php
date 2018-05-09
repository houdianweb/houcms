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
namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'cms_article';
    protected $fillable = ['title','descr','click'];
    public function adds($data){
        $insert = array();
        $insert['uid']   = $data['uid'];
        $insert['title'] = $data['title'];
        $insert['descr'] = $data['descr']?$data['descr']:$data['content'];
        $insert['click'] = isset($data['click'])?$data['click']+1:1;
        return $this->insertGetId($insert);
    }
    // 关联用户
    public function user(){
        return $this->belongsTo('App\User','uid','id');
    }
}
