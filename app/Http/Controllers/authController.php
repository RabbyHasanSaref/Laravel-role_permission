<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function login()
    {
//        dd(Hash::make(123456));
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials or user not found.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }

}
