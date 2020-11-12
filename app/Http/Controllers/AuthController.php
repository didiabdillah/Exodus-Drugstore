<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function register_process(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'username'  => 'required',
            'email'  => 'required',
            'password'  => 'required',
            'retype_password'  => 'required|same:password'
        ]);

        $data = [
            'user_name' => $request->name,
            'user_username' => $request->username,
            'user_email' => $request->email,
            'user_password' => Hash::make($request->password),
            'user_role' => 2,
            'user_image' => "default.jpeg"
        ];

        DB::table('users')->insert($data);

        return redirect('/login');
    }

    public function forgotpassword()
    {
        return view('auth/forgotpassword');
    }
}
