<?php

namespace App\Http\Controllers;


use App\Http\Requests;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function postLogin(Request $request) {

        //\Debugbar::info("0k entra a postLogin");
        echo "asdasd";
        if ($this->login($request->email.$request->password)){
            return redirec()->route('home');
        } else {
            return redirec()->route('login');
        }
    }

    private function login($email, $password)
    {
        $user = User::findOrFail(id);//Per a que peti
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
