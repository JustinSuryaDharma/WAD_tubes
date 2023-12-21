<?php

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
    return view('index');
<<<<<<< HEAD
=======
});
Route::get('/shop', function () {
    return view('shop');
>>>>>>> d631132a202d1cd477f06a4222496c8c3e40fe0f
});
