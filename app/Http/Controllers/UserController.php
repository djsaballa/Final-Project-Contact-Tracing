<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\UserQr;


class UserController extends Controller
{   
    // for form
    public function userForm(Request $request)
    {
        $user_info = new UserInfo();
        return view('/user/user-form', compact('user_info'));
    }

    public function userCreate(Request $request)
    {
            $user_info  = new UserInfo();

            $user_info->name = $request-> name;
            $user_info->email = $request->email;
            $user_info->address = $request->address;
            $user_info->phone_number = $request->phone_number;
            $user_info->body_temp = $request->body_temp;
            $user_info->age = $request->age;
    
            if ($user_info->save()) {

                return redirect('/user-qr-code');

            }
            
            return redirect('/user-qr-code');
    }

    
    // for qr-code
    public function qrCode(Request $request)
    {
        return view('/user/qr-code');
    }


    // privacy and terms
    public function privacyPolicy(Request $request)
    {
        return view('/user/privacy-policy');
    }

    public function termsCondition(Request $request)
    {
        return view('/user/terms-condition');
    }









}
