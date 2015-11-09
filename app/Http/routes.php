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

<<<<<<< HEAD
=======

>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/home', ['as' => 'auth.home' , function () {
    return view('home');
}]);

Route::get('/login', [ 'as' => 'auth.login', 'uses' => 'LoginController@getLogin' ]);

Route::post('/postlogin', [ 'as' => 'auth.postLogin', 'uses' => 'LoginController@postLogin' ]);

Route::get('/resource', function () {
    $authenticated = false;
    if (Session::has('authenticated')){
       if (Session::get('authenticated') == true) {
           $authenticated = true;
       }
    }


    if ($authenticated){
        return view('resource');
    }else{
        return view('login');
    }
});
=======
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
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
