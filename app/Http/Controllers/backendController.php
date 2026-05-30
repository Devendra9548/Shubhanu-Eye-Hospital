<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class backendController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('dashboard')
                ->with('success', 'Welcome Back!');
        }
        return view('back.login');
    }
    
    public function logout(){
        if (Auth::check()) {
          Auth::logout();
          return redirect()->route('login')
          ->with('success', 'Logout Successfully');
        }
    }
    
  
    
    public function checklogin(Request $req)
    {
        $checkexistuser =  User::where('email', $req->uemail)->first();
        if($checkexistuser){
        Auth::attempt([
            'email' => $req->uemail,
            'password' => $req->upassword,
        ]); 
        return redirect()->route('dashboard')
                    ->with('success', 'Login Successfully.');
        }        

        if (Auth::check()) {
            return redirect()->route('dashboard')
                ->with('success', 'Already Logged In');
        }

        
    
        $userdata = $req->validate([
            'uname' => 'required',
            'uemail' => 'required|email',
            'upassword' => 'required|min:6|max:12|confirmed',
        ], [], [
            'uname' => 'Username',
            'uemail' => 'Email',
            'upassword' => 'Password',
        ]);
    
        User::create([
            'name' => $req->uname,
            'email' => $req->uemail,
            'password' => $req->upassword,
        ]);
        if (Auth::attempt([
            'email' => $req->uemail,
            'password' => $req->upassword,
        ])) 
        {
            return redirect()->route('dashboard')
                    ->with('success', 'Account Createad Successfully.');
        }
    
        
        
    
        
    }
}
