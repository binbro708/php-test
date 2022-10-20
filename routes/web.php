<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index']);


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/product',[ProductController::class, 'index']
)->middleware(['auth', 'verified']);

// 新增
Route::get('/admin/product/create',[ProductController::class, 'create']
)->middleware(['auth', 'verified']);
//讀取
Route::post('/admin/product/store',[ProductController::class, 'store']
)->middleware(['auth', 'verified']);



require __DIR__ . '/auth.php';
