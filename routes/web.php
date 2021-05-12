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

Route::get('/user-user-form', 'App\Http\Controllers\UserController@userForm');

Route::post('/user-user-create', 'App\Http\Controllers\UserController@userCreate');

Route::get('/user-qr-code', 'App\Http\Controllers\UserController@qrCode');

Route::get('/user-privacy-policy', 'App\Http\Controllers\UserController@privacyPolicy');

Route::get('/user-terms-condition', 'App\Http\Controllers\UserController@termsCondition');


// Admin

Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

Route::get('/admin-navigation', 'App\Http\Controllers\AdminController@navigation');

Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');

Route::post('/admin-login-auth', 'App\Http\Controllers\AdminController@loginAuth');

Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@tableList');

Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiverQr');
