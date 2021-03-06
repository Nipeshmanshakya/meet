<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    function register() {

        return view('auth.register');
    }

    function postRegister( RegisterForm $request ) {

        User::create( $request->only(['first_name', 'last_name', 'email', 'password']) );
        return redirect('login');

    }

    function login(){

        return view('auth.login');
    }

    function postLogin( Request $request ) {

        $userData = $request->only(['email','password']);

        if( Auth::attempt( $userData ) ) {
            $user = Auth::user();
            $user->auth_token = md5( $user->email . time() . str_random() );
            $user->save();
            return redirect('posts');
        }

        return redirect()->back();

    }

    function logout() {

        Auth::logout();
        return redirect('login');
    }


}
