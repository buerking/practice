<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //远程表关联关系，传递的参数，第一个是目标参数，第二个是中间参数。例如通过帖子查作者所在的学校和所写的书籍，如下。
    protected $guarded = [];
    public function authorSchool(){
        return $this->hasOneThrough('App\School','App\Author');
    }
    public function authorBooks(){
        return $this->hasManyThrough('App\Book','App\Author');
    }
}
