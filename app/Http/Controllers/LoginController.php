<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/events');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
         Auth::logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('/logadmin');
    }
}
