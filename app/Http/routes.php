<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
   Route::any('/index', 'loginController@index');

    Route::any('/login','loginController@login');
    Route::any('/message','messageController@Addmessage');
    Route::any('/message_crypt','messageController@Addmessage_crypt');
    Route::any('/show','messageController@show');
    Route::any('/create_mac','messageController@create_mac');
    Route::any('/decrypt','messageController@decrypt');
    Route::any('/register','registerController@register');
});
