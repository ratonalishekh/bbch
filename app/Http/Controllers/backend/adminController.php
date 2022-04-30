<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;


class adminController extends Controller
{
    //
    public function adminLoginForm(){

        return view('backend.admin_login.admin_login');
    }
    
    public function adminLoginCheck(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]); 

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error-msg','Invalid Email or Password');
            return redirect()->back();
        }
    }
    public function adminlogout(){

        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    
}
