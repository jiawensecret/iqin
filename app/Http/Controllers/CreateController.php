<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateController extends Controller
{
    //
    public function index() {
        $title ='创作';
        return view('create.index',compact('title'));
    }

    public function create() {

    }
}
