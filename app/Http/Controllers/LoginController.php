<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Process a Login HTTP Post
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function postlogin(Request $request){

            if ($this->login($request->email.$request->password)){
                //Redirect to more
                return redirect()->route('auth.home');
            }else {
                //Redirect to back
                return redirect()->route('auth.login');
            }
    }

    /**
     *
     * get Login
     *
     * @return \Illuminate\View\View
     */
    public function getLogin(){
        return view('login');
    }
}
