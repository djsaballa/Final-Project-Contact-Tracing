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

// User

// user hompage
Route::get('/', function () {
    return view('welcome');
});
//user form
Route::get('/user-user-form', 'App\Http\Controllers\UserController@userForm');
Route::post('/user-user-create', 'App\Http\Controllers\UserController@userCreate');

//user qr code
Route::get('/user-qr-code', 'App\Http\Controllers\UserController@qrCode');

//terms and privacy
Route::get('/user-privacy-policy', 'App\Http\Controllers\UserController@privacyPolicy');
Route::get('/user-terms-condition', 'App\Http\Controllers\UserController@termsCondition');


// Admin

//admin homepage
Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

//admin login
Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');
Route::post('/admin-login-auth', 'App\Http\Controllers\AdminController@loginAuth');

//admin navigation
Route::get('/admin-navigation', 'App\Http\Controllers\AdminController@navigation');

// admin qr reciever
Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiverQrForm');
Route::post('/admin-receiver-qr-create', 'App\Http\Controllers\AdminController@receiverQrFormCode');

//table
Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@tableList');
Route::get('/admin-table-details/{qr_code}', 'App\Http\Controllers\AdminController@tableDetails');