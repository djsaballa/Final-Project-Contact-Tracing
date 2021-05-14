<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $request->validate ([
            'name' => 'required',
            'email' => 'required|email|unique:user_info',
            'address' => 'required',
            'phone_number' => 'required|digits:11|unique:user_info',
            'body_temp' => 'required|numeric',
            'age' => 'required|numeric',

        ]);

            $user_info  = new UserInfo();
            $user_info->name = $request-> name;
            $user_info->email = $request->email;
            $user_info->address = $request->address;
            $user_info->phone_number = $request->phone_number;
            $user_info->body_temp = $request->body_temp;
            $user_info->age = $request->age;
            $user_info->qr_code = Str::random(30);
    
            if ($user_info->save()) {
                $request->session()->put('LoggedUser', $user_info->id);
                return redirect('/user-qr-code');

            }
            
            return redirect('/user-user-form');
    }

    
    // for qr-code
    public function qrCode(Request $request)
    {
        $data = ['LoggedUserInfo'=>UserInfo::where('id','=', session('LoggedUser'))->first()];
        return view('/user/qr-code', $data);
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
