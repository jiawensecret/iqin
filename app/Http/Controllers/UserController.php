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
        $req = $request->all();

        if($req['password'] !== $req['password_confirmation']) {
            return redirect();
        }
        $filter = $user->fillable;
        $req = $this->checkParams($req,$filter);
        var_dump($req);exit;

        $user->insert($req);

        return redirect('/');
    }
}
