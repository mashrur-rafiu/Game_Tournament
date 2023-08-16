<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;
use Session;
Session_start();

class AdminController extends Controller
{
    //
   public function adminLogin()
    {
        return view('admin_login');
    }
    function managePlayer(Request $req)
    {
        $admin_email=$req->email;
        $admin_password=md5($req->password);
        $result=Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result)
        {
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);           
            return redirect('admin_control');
        }
        else{
            Session::put('message', 'Email or Password is Invalid');
            return redirect('admin');
        }
    }
}
