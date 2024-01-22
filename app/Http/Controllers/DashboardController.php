<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(!User::where('email_verified_at', null)){
            return redirect("register/user");
        }
        return view('users.dashboard');
    
        
    }

   public function registered()
   {
        
        return view('users.registered');
        
   }
}
