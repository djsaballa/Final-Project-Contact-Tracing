<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    public function welcome(Request $request)
    {
        return view('/admin/welcome');
    }

    public function login(Request $request)
    {
        return view('/admin/login');
    }

    public function loginAuth(Request $request)
    {
        $username;
        $password;

        if ($username == 'admin' && $password == 'admin') {
            return redirect('/admin/table-list');
        }
        return redirect('/admin/login');
    }

    public function receiverQr(Request $request)
    {
        return view('/admin/receiver-qr');
    }

    public function tableList (Request $request)
    {
        return view('/admin/table-list');
    }
}
