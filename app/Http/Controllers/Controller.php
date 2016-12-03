<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $user;
    protected $title;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->title = 'jw';
    }


    protected function checkParams($data, $filter)
    {
        array_walk($data, function (&$item) {
            $item = trim($item);
        });
        $data = array_intersect_key($data, array_flip($filter));
        return $data;

    }

    protected function render($view, $data = [])
    {
        $data['this_user'] = $this->user;
        $data['title'] = $this->title;
        return view($view, $data);
    }

}
