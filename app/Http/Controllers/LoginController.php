<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests;

=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
<<<<<<< HEAD
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

    /**
     * get Login
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
=======
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
>>>>>>> 45934c70ccf0fc2868000427acc4c62f5f307a4e
        return view('login');
    }
}
