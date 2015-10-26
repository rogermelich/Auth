<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
        public function postLogin(Request $request){

            if ($this->login($request->email.$request->password)){
            // Redirect to more
                return redirect()->route('home');
            }else {
                //Redirect to back
                return redirect()->route('auth.login');
            }
    }
    public function getLogin(){
        return view('login');
    }
}
