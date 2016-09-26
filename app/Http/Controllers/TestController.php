<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class TestController extends Controller
{
    //
    function index() {
        $testArray = [['id'=>2],['id'=>1],['id'=>3],['id'=>4]];
        $test = collect($testArray);
        $a = $test->where('id',1);
        print_r(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS));
    }

    function t()
    {
        $a = '我要怎么，--说你a呀的re都k。
            说你是我的baby呀';
        echo mb_strlen(str_replace(' ','',$a),'utf8');exit;
        return view('t');
    }

    function s()
    {
        return view('index');
    }
}
