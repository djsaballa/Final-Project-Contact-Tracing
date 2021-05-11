<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\UserQr;


class UserController extends Controller
{
    public function userForm(Request $request)
    {
        return view('/user/user-form');
    }

    public function qrCode(Request $request)
    {
        return view('/user/qr-code');
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
