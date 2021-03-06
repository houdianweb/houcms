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

class ArticleDetail extends Model
{
    public $timestamps = true;
    protected $table = 'cms_article_detail';
    protected $fillable = ['content','aid'];
    public function adds($data){
        $insert = array();
        $insert['content'] = $data['content'];
        $insert['aid']     = $data['aid'];
        return $this->insertGetId($insert);
    }
}
