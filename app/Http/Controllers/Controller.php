<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        dd("hello world");
    }
    public function a(){
        dd("iam fine ty");
    }

    public function test(){
    return '<div style="color:red"> test</div>';
    }
    public function b(){
        return view('welcome');
    }

    
}
