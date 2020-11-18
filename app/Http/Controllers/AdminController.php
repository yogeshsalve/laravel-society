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
        
        $admin = admin::where('email',$request->email)->where('password',$request->password)->get()->first();
        if($admin)
        {
            return redirect('admin-dashboard');

        }
        else{
            return redirect('admin');
        }
        
        
        
        
        
        
        
        // $admin  = new Admin;
        // $admin->email= $request->email;
        // $admin->password= $request->password;
        // $admin->save();
        // return redirect('admin');

    }
   
}
