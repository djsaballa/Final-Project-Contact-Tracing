<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTracing;

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

    public function register(Request $request)
    {
        return view('/user/register');
    }

    public function userForm(Request $request)
    {
        return view('/user/user-form');
    }

    public function forgotPassword(Request $request)
    {
        return view('/user/forgot-password');
    }

    public function verifyForgotPassword(Request $request)
    {
        return view('/user/verify-forgot-password');
    }

    public function newPassword(Request $request)
    {
        return view('/user/new-password');
    }

    public function qrRegister(Request $request)
    {
        return view('/user/qr-register');
    }

    public function qrLogin(Request $request)
    {
        return view('/user/qr-login');
    }

    public function privacyPolicy(Request $request)
    {
        return view('/user/privacy-policy');
    }

    public function termsCondition(Request $request)
    {
        return view('/user/terms-condition');
    }









}
