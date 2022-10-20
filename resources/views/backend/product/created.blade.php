@extends('layouts.app');

@section('css')
    <style>
        main div {
            width: 80%;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid black;
            margin: auto;
            margin-top: 30px;
        }



        main .btnA {
            display: flex;
            width: 100px;
            height: 30px;
            border: 1px solid black;
            background-color: green;
            margin-bottom: 50px;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            color: white;
        }

        main .btnB {
            display: flex;
            width: 100px;
            height: 30px;
            border: 1px solid black;
            background-color: red;
            margin-bottom: 50px;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            color: white;
        }

        img {
            width: 250px;
        }
    </style>
@endsection
@section('main')
    <div>
        <form action="/admin/product/store" method="post">
            @csrf
            <label for="title">商品標題</label>
            <input type="text" name="title" id="title">
            <label for="content">商品內容</label>
            <input type="text" name="content" id="content">
            <label for="img_path">圖片路徑</label>
            <input type="text" name="img_path" id="img_path">

            <button type="submit" class="btnA">新增</button>
        </form>
    </div>
@endsection
