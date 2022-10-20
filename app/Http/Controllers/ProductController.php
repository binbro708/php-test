<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::get();
        $header = "商品管理";
        $slot = "";
        return view('backend.product.list', compact('slot', 'header', 'product'));
    }
    public function create()
    {
        $header="新增產品";
        $slot = "";
        return view('backend.product.created', compact('slot', 'header'));
    }

    public function store(Request $request)
    {
        Product::create([
            'title' =>$request->title,
            'content' =>$request->content,
            'img_path'=>$request->img_path,
            'link'=>$request->link,
        ]);


        return redirect('/admin/product');
    }
}
