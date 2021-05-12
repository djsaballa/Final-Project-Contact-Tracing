<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\UserQr;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function welcome(Request $request)
    {
        return view('/admin/welcome', $data);
    }

    public function navigation(Request $request)
    {
        return view('/admin/navigation');
    }

    public function login(Request $request)
    {
        return view('/admin/login');
    }

    public function loginAuth(Request $request)
    {
        //return $request->input();

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

    public function receiverQr(Request $request)
    {
        return view('/admin/receiver-qr');
    }

    public function tableList (Request $request)
    {
        $user_info = UserInfo::all();
        $user_qr = UserQr::all();
        
        return view('/admin/table-list', compact('user_info', 'user_qr'));
    }
}
