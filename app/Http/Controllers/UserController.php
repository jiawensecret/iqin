<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function register() {



        return view('register');
    }

    public function postRegister(Request $request) {
        $user = new User();
        $req = $request->all();

        /*$filter = $user->fillable;
        $req = $this->checkParams($req,$filter);*/

        $user->insert($req);



    }
}
