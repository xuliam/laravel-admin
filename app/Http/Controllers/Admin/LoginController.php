<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login.login');
    }

    public function dologin(Request $request){
//        dd($request->post());
        $result = Auth::attempt(['username'=>$request->username, 'password'=>$request->password, 'status'=>1]);
//        dd($result);
        if($result){
            return redirect('admin/index');
        }else{
            return redirect()->back();
        }
    }
}
