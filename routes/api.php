<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('signup', 'Auth\RegisterController@register');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user()->email();
//});

//Route::group(['namespace' => 'API', 'middleware' => 'auth:api'], function () {
//    Route::get('user', 'UserController@show');
//
//    Route::resource('notes', 'NoteController')->only([
//        'index', 'store', 'update'
//    ]);
//});

Route::resource('notes', 'API\NoteController');

Route::get('users', function () {
    return App\User::all();
});


