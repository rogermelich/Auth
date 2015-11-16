<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function  postRegister(Request $request){

        $this->validate($request, [
            'name' => 'required|max:180',
            'email'=> 'required|email|unique:users.email',
            'password' => 'required'
        ]);

        ## Old code.
        #$user = new User();
        #$user->name = Input::get('name');
        #$user->email = Input::get('email');
        #$user->password = Input::get('password');
        #$user->save();
        $user = new User();
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('auth.login');
    }

}