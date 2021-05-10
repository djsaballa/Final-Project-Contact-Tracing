<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome(Request $request)
    {
        return view('/user/welcome');
    }

    public function login(Request $request)
    {
        return view('/user/login');
    }

    public function login(Request $request)
    {
        return view('/user/login');
    }

    public function register(Request $request)
    {
        return view('/user/register');
    }

    public function user_form(Request $request)
    {
        return view('/user/user-form');
    }

    public function forgot_password(Request $request)
    {
        return view('/user/forgot-password');
    }

    public function verify_forgot_password(Request $request)
    {
        return view('/user/verify-forgot-password');
    }

    public function new_password(Request $request)
    {
        return view('/user/new-password');
    }

    public function qr_register(Request $request)
    {
        return view('/user/qr-register');
    }

    public function qr_login(Request $request)
    {
        return view('/user/qr-login');
    }

    public function privacy_policy(Request $request)
    {
        return view('/user/privacy-policy');
    }

    public function terms_condition(Request $request)
    {
        return view('/user/terms-condition');
    }









}
