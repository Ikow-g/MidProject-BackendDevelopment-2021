<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $datamasuk = $request->validate([
            'name' => 'required|min:10|max:45',
            'username' => 'required|min:3|max:15|unique:users',
            'password' => 'required|min:8|max:20',
            'password_confirm' => 'required|min:8|max:20'
            
        ]);
        $datamasuk['password'] = bcrypt($datamasuk['password']);

        User::create($datamasuk);

        $request->session()->flash('success', 'Registration successfull!');

        return redirect('/login');

    }
}
