<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function register() {
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        $user = new User();
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6,max:16,confirmed',
        ];
        $this->validate($request, $rules);

        $req = $request->all();

        if($req['password'] !== $req['password_confirmation']) {
            return redirect('/register');
        }
        $filter = $user->fillable;
        $req = $this->checkParams($req,$filter);

        $req['password'] = bcrypt($req['password']);
        $user->insert($req);

        return redirect('/');
    }
}
