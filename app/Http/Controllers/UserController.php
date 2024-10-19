<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginAuth(Request $request) {
        $request->validate([
            'email'=>'required|max:100|email',
            'password'=>'required|min:8',
        ]);

        // $user = $request->only('email', 'password');
        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ])) {
            return redirect()->route('admin_page');
        }else {
            return redirect()->back()->with('failed', 'email/password salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda Telah Logout!');
    }


    public function logoutAuth() {
        Auth::logout();
        return redirect()->route('login');
    }
}
