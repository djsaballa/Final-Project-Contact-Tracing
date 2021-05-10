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

Route::get('/user-user-form', 'App\Http\Controllers\UserController@user_form');

Route::get('/user-forgot-password', 'App\Http\Controllers\UserController@forgot_password');

Route::get('/user-verify-forgot-password', 'App\Http\Controllers\UserController@verify_forgot_password');

Route::get('/user-new-password', 'App\Http\Controllers\UserController@new_password');

Route::get('/user-qr-register', 'App\Http\Controllers\UserController@qr_register');

Route::get('/user-qr-login', 'App\Http\Controllers\UserController@qr_login');

Route::get('/user-privacy-policy', 'App\Http\Controllers\UserController@privacy_policy');

Route::get('/user-terms-condition', 'App\Http\Controllers\UserController@terms_condition');


// Admin

Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');

Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@table_list');

Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiver_qr');
