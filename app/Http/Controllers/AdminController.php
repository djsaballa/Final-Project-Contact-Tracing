<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\UserQr;


class AdminController extends Controller
{
    public function welcome(Request $request)
    {
        return view('/admin/welcome');
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
        $username ;
        $password ;

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
