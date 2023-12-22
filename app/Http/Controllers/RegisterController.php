<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;



class RegisterController extends Controller
{
    public function index()
    {
        return view('dashboard.register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'gender' => 'required'
        ]);

        User::create($validatedData);

        // Session::flash('success', 'Registrasi berhasi! Silakan login');

        return redirect('/');
    }
}
