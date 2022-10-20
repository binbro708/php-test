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

        table {
            width: 100%;

        }

        td {
            border: 1px solid black;
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
        img{
            width: 250px;
        }
    </style>
@endsection
@section('main')
    <div>
        <a href="/admin/product/create" class="btnA">新增產品</a>
        <table>
            <tr>
                <td>商品編號</td>
                <td>商品名稱</td>
                <td>商品圖片</td>
                <td>操作</td>
            </tr>
            @foreach ($product as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td><img src="{{$item->img_path}}" alt=""></td>
                    <td>
                        <a href="/admin/product/create" class="btnA">編輯</a>
                        <a href="/admin/product/create" class="btnB">刪除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
