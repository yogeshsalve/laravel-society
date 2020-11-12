<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    //
    public function admins()
    {
        return view('/admin.admin-login');
    
    }


    function addAdmin(Request $request)
    {
        $admin= Admin::where(['email'=>$request->email])->first();
        if(!$admin::check($request->password, $admin->password))
        {
            return "Email Id or Password does not match !";
        }
        else
        {
            return redirect('admin.admin-dashboard');
        }
        
        // $admin  = new Admin;
        // $admin->email= $request->email;
        // $admin->password= $request->password;
        // $admin->save();
        // return redirect('admin');

    }
   
}
