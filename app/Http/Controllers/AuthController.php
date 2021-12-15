<?php

namespace App\Http\Controllers;

use Auth; 
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }
    public function register()
    {
        return view('auths.register');
    }
    public function create(Request $request)
    {
        validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = \App\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
