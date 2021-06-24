<?php

use Illuminate\Support\Facades\Route;

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

// TOP
Route::get('/', 'ProductController@index')->name('result.index');

// 商品
Route::resource('product', 'ProductController', ['only' => ['show']]);

// お問い合わせ
Route::get('/contact', function () {
    return view('contact.index');
});

// プライバシーポリシー
Route::get('/privacy-policy', function () {
    return view('privacy-policy.index');
});
