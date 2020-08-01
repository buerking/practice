<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $guarded = [];
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function image(){
        return $this->morphOne('App\Image','imageable');
    }
}
