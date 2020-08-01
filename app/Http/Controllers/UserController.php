<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function create(){

        $user = User::create(
            [
                'name'=>'碎6发华',
                'email'=>'253645624@qq.com',
                'password'=>'55315ass533'
            ]
        );
        $user->identity_card()->create([
            'city'=>'南京',
        ]);
    }
    public function del(){
//        $user = User::find(2);
//        $user -> identity_card() -> delete();
        $user = User::where('name', '阿碎华')->first();
        $user -> identity_card() -> delete();
    }
    public function update(){
        $user = User::find(3);
        $user ->identity_card()->update([
           'city' => '香港',
        ]);

    }
    public function select(){
        $user = User::find(3);
        $result = $user->identity_card;
        print ($result);
    }
}
