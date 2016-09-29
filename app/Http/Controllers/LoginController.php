<?php

namespace App\Http\Controllers;

use App\Model\Revert;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login() {
        if (Auth::check()) {
            return redirect('/');
        }
        return $this->render('auth.login');
    }

    public function postLogin(Request $request) {
        $rules = ['email'=>'required|email','password'=>'required|min:6,max:16'];
        $this->validate($request,$rules);
        $data = $request->only(['email','password']);

        if(Auth::attempt($data)) {
            return redirect()->intended();
        }

        return redirect('/login')->with('error','密码错误');

    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}

