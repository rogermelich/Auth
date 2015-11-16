<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Process a login HTTP POST
     *
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request){
        //echo "asdasd";
        if ($this->login($request->email, $request->password)) {
            return redirect()->route('auth.home');
        } else {
            return redirect()->route('auth.login');
        }


        //$user = User::findOrFail(id);//Per a que peti

        if (Hash::check($password, $user->$password)) {
            return true;
        } else {
            return false;
        }
    }
        private function login($email, $password){

            $user = User::where('email', $email)->first();

            if (Hash::check($password, $user->password)) {
                return true;
            } else {
                return false;
            }
        }

        public function getLogin() {
            return view('login');
        }

    }
