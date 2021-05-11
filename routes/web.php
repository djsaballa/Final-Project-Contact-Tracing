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


// User

Route::get('/user-welcome', 'App\Http\Controllers\UserController@welcome');

Route::get('/user-login', 'App\Http\Controllers\UserController@login');

Route::get('/user-register', 'App\Http\Controllers\UserController@register');

Route::get('/user-user-form', 'App\Http\Controllers\UserController@userForm');

Route::get('/user-forgot-password', 'App\Http\Controllers\UserController@forgotPassword');

Route::get('/user-verify-forgot-password', 'App\Http\Controllers\UserController@verifyForgotPassword');

Route::get('/user-new-password', 'App\Http\Controllers\UserController@newPassword');

Route::get('/user-qr-register', 'App\Http\Controllers\UserController@qrRegister');

Route::get('/user-qr-login', 'App\Http\Controllers\UserController@qrLogin');

Route::get('/user-privacy-policy', 'App\Http\Controllers\UserController@privacyPolicy');

Route::get('/user-terms-condition', 'App\Http\Controllers\UserController@termsCondition');


// Admin

Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

Route::get('/admin-navigation', 'App\Http\Controllers\AdminController@navigation');

Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');

Route::post('/admin-login-auth', 'App\Http\Controllers\AdminController@loginAuth');

Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@tableList');

Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiverQr');
