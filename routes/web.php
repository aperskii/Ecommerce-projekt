<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $result = DB::table('categories')->get();

    return view('welcome', ['categories' => $result]);
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/category', function () {
    return view('category');
});
