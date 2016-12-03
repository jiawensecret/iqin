<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateController extends Controller
{
    //
    public function index() {



    }

    public function write() {
        $this->title ='创作';
        return $this->render('create.index');
    }
}
