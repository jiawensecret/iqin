<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    function index ()
    {
        $title = '首页';
        return view('index',compact('title'));
    }
}