<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        return "store";
    }

    public function login_form(){
        return view('auth.login');
    }

    public function check(){
        return redirect()->route('dashboard');
    }

    public function forgot_password(){
        return view('auth.forgot-password');
    }

    public function check_email(){
        return "check_email";
    }

    public function dashboard(){
        return view('user.dashboard');
    }

    public function user_logout(){
        return "user_logout";
    }
}
