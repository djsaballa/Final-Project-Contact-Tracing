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

    public function receiver_qr(Request $request)
    {
        return view('/admin/receiver-qr');
    }

    public function table_list (Request $request)
    {
        return view('/admin/table-list');
    }
}
