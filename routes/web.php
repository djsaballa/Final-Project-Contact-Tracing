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

// Admin

Route::get('/admin-welcome', 'App\Http\Controllers\AdminController@welcome');

Route::get('/admin-login', 'App\Http\Controllers\AdminController@login');

Route::get('/admin-table-list', 'App\Http\Controllers\AdminController@table_list');

Route::get('/admin-receiver-qr', 'App\Http\Controllers\AdminController@receiver_qr');

// User