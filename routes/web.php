<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});
Route::get('/del/', 'UserController@del');
Route::get('/update/', 'UserController@update');
Route::get('/select/', 'UserController@select');

Route::get('card/select/', 'IdentityCardController@select');

Route::get('/comment/edit/', 'CommentController@edit');

Route::get('/comment/del/', 'CommentController@del');
Route::get('/comment/create/', 'CommentController@create');
Route::get('/comment/sel/', 'CommentController@select');
Route::get('/role/create/', 'RoleController@create');
Route::get('/role/del/', 'RoleController@del');

Route::get('/role/update/', 'RoleController@update');
Route::get('/role/show/', 'RoleController@show');
Route::get('/thread/sel/', 'ThreadController@sel');

Route::get('/thread/selbook/', 'ThreadController@selbook');

Route::get('/provider', function (){
    resolve('aaa');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/info', function (){
    phpinfo();
});
Route::get('/listen', function (){
    $user = App\User::find(1);
    event(new \App\Events\RegisterOK($user));
}
);

Route::get('/event', function () {
    event(new \App\Events\Free('免缴农业税啦'));
});

//Route::get('/login/user/{id}', fn($id) => auth()->loginUsingId($id));

Route::get('/room/{roomId}', function ($roomId) {
    broadcast(new \App\Events\Hello($roomId));
    return view('welcome', ['roomId' => $roomId]);
});

Route::get('/room/{roomId}/{msg}', function ($roomId, $msg) {
    broadcast(new \App\Events\NewMessage($roomId, $msg));
});

Route::get('/middlewaretest', function (){
    echo "5\n";
})->middleware(\App\Http\Middleware\ShowAge::class);