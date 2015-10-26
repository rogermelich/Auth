<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['as' => 'auth.home'],function () {
    return view('home');
});

Route::get('/login', ['as' => 'auth.login', 'uses' => 'LoginController@postlogin']);
Route::post('postLogin', ['as' => 'auth.postlogin', 'uses' => 'LoginController@postlogin']);

Session::set('authenticated');

Route::get('/resource', function () {

    $authenticated = false;
    if (Session::has('authenticated')){
        if (Session::get('authenticated') == true ){
            $authenticated = true;
        }
    }

    if ($authenticated){
    return view('resource');
    }else {
        return view('login');
    }
});
