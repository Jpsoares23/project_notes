<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(){
        echo 'loginSubmit';
    }

    public function register(){
        return view('registration');
    }

    public function registrationSubmit(){
        echo 'registerSubmit';
    }
}