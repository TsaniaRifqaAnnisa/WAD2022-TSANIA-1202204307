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

Route::get('/', function () {
    return view('home-tsania');
});

Route::get('/add-tsania', function () {
    return view('add-tsania');
});

Route::get('/detail-tsania', function () {
    return view('detail-tsania');
});

Route::get('/edit', function () {
    return view('edit-tsania');
});


Route::get('/list-tsania', function () {
    return view('list-tsania');
});

Route::get('/login-tsania', function () {
    return view('login-tsania');
});

Route::get('/profil-tsania', function () {
    return view('profil-tsania');
});

Route::get('/registration', function () {
    return view('register-tsania');
});

