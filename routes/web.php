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
<<<<<<< Updated upstream

// user

=======
//
<<<<<<< HEAD
>>>>>>> Stashed changes
Route::get('/user-forgot-password', function () {
    return view('/user/forgot-password');
});
Route::get('/user-login', function () {
    return view('/user/login');
});
Route::get('/user-new-password', function () {
    return view('/user/new-password');
});
Route::get('/user-privacy-policy', function () {
    return view('/user/privacy-policy');
});
Route::get('/user-qr-login', function () {
    return view('/user/qr-login');
});
Route::get('/user-qr-register', function () {
    return view('/user/qr-register');
});
Route::get('/user-register', function () {
    return view('/user/register');
});
Route::get('/user-terms-condition', function () {
    return view('/user/terms-condition');
});
Route::get('/user-form', function () {
    return view('/user/user-form');
});
Route::get('/user-verify-forgot-password', function () {
    return view('/user/verify-forgot-password');
});
Route::get('/user-welcome', function () {
    return view('/user/welcome');
});


// Admin

Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');

Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@table_list');

Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiver_qr');
