<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        // form validation
        $request->validate([
            'text_username' => 'required',
            'text_password' => 'required|min:6|max:20',
        ],
        [
            'text_username.required' => 'Username required',
            'text_password.required' => 'Password required',
            'text_password.min' => 'Password at least :min characters',
            'text_password.max' => 'Password maximum :max characters']);
    }

    public function register(){
        return view('registration');
    }

    public function registrationSubmit(Request $request){
        // form validation
        $request->validate([
            'text_name' => 'required',
            'text_username' => 'required',
            'text_password' => 'required|min:6|max:20',
            'text_email' => 'required',
        ]);
    }
}
