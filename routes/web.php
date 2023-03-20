<?php

use Illuminate\Support\Facades\Route;

/*
Illuminate\Support\Facades\Facade\Route.phpを利用する、ということを宣言しています。
Illuminate というのは、 vendor/laravel/framework/src/Illuminate/ に存在します。

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
