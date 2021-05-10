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
    return view('welcome');
});

Route::get('/user-forgot-password', function () {
    return view('/user/login');
});
Route::get('/user-login', function () {
    return view('/user/login');
});
Route::get('/user-new-password', function () {
    return view('/user/login');
});
Route::get('/user-privacy-policy', function () {
    return view('/user/login');
});
Route::get('/user-qr-login', function () {
    return view('/user/login');
});
Route::get('/user-qr-register', function () {
    return view('/user/login');
});
Route::get('/user-register', function () {
    return view('/user/login');
});
Route::get('/user-terms-condition', function () {
    return view('/user/login');
});
Route::get('/user-form', function () {
    return view('/user/login');
});
Route::get('/user-verify-forgot-password', function () {
    return view('/user/login');
});
Route::get('/user-welcome', function () {
    return view('/user/login');
});





