<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:45',
            'username' => 'required|min:3|max:15|unique:user',
            'password' => 'required|min:8|max:20',
            'password_confirm' => 'required|min:8|max:20'
            
        ]);
        dd('registrasi berhasil');
    }
}
