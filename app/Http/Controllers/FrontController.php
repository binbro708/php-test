<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FrontController extends Controller
{
    //首頁回傳 開啟首頁
    public function index(){


        dd("text");
        // $product= Product::find(1);
        // $product= Product::get();
// dd($product);
        // return view('frontend.bs.index',compact('product'));
    }

    // weather
    public function w(){
        return view('frontend.bs.index');
    }
    // 新聞內頁
    public function bb(){
        return view('frontend.bs.index');
    }
}
