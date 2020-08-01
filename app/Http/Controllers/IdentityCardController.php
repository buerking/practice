<?php

namespace App\Http\Controllers;

use App\IdentityCard;
use Illuminate\Http\Request;

class IdentityCardController extends Controller
{
    //
    public function create(){

        $user = \App\User::create(
            [
                'name'=>'碎华',
                'email'=>'2533165324@qq.com',
                'password'=>'55315ass533'
            ]
        );
        $user->identity_card()->create([
            'city'=>'南京',
        ]);
    }
    public function select(Request $request){
//        $keywords = $request->input('name');
//        $cards = IdentityCard::with('user')->find([1,3]);
//        $cards = IdentityCard::with('user')->where('city','南京')->get();
//        echo $cards;
        $cards = IdentityCard::with('user')->where('city','南京')->get();
        return view('card', compact('cards'));
    }
}
