<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\UserQr;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    // for homepage
    public function welcome(Request $request)
    {
        return view('/admin/welcome');
    }

    // for navigation
    public function navigation(Request $request)
    {
        return view('/admin/navigation');
    }

    // for login
    public function login(Request $request)
    {
        return view('/admin/login');
    }
    public function loginAuth(Request $request)
    {
        $request->validate ([
            'username' => 'required',
            'password' => 'required'
        ]);

        $loginInfo = Admin::where('username','=', $request->username)->first();

        if(!$loginInfo){
            return back()->with('fail','Incorrect username');
        }else{
            //check password
            if(Hash::check($request->password, $loginInfo->password)){
                return redirect('/admin-navigation');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    // for reciever
    public function receiverQrForm(Request $request)
    {
        return view('/admin/receiver-qr');
    }
    public function receiverQrFormCode(Request $request)
    {
        $user_qr  = new UserQr();

        $user_qr->user_info_qr_code = $request-> user_info_qr_code;

        if ($user_qr->save()) {
            return redirect('/admin-receiver-qr', compact('user_qr'));
        }
        return redirect('/admin-receiver-qr', compact('user_qr'));
    }
    

    // for table
    public function tableList (Request $request)
    {
        $user_qr = UserQr::all();
        
        return view('/admin/table-list', compact('user_qr'));
    }

    public function tableDetails ($qr_code)
    {
        $user_info = UserInfo::find($qr_code);
        
        return view('/admin/table-details', compact('user_info'));
    }
}