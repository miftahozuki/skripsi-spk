<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login.index');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin/dashboard');
        }

        return back()->with('loginFail', 'Periksa username atau password anda.');

    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();

        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
