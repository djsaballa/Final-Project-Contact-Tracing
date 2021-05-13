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
        $user_qr= new UserQr();
        return view('/admin/receiver-qr', compact('user_qr'));
    }

    public function receiverQrFormCode(Request $request)
    {
        $user_qr= new UserQr();
    
        $user_qr->qr = $request-> qr;
       
        if ($user_qr->save()) {

            return redirect('/admin-receiver-qr');

        }
        
        return redirect('/admin-receiver-qr');
    }
    
    // for table
    public function tableList (Request $request)
    {
        $user_info = UserInfo::all();
        $user_qr = UserQr::all();
        
        return view('/admin/table-list', compact('user_info', 'user_qr'));
    }
}
