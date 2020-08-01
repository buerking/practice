<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentityCard extends Model
{
    //
//    protected $table = 'identity_cards';
    protected $guarded= [];
    public function user(){

        return $this->belongsTo(User::class);
    }

}
