<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function login_process(Request $request)
    {
        $request->validate(
            [
                'email'  => 'required',
                'user_password'  => 'required'
            ],
            [
                'user_password.required' => 'The password field is required.',
                'email.required' => 'The username/email field is required.'
            ]
        );

        $user_login = $request->email;
        $password = $request->user_password;

        $user = DB::table('users')
            ->where('user_username', $user_login)
            ->orWhere('user_email', $user_login)
            ->first();

        if ($user) {
            if ($user->user_username == $user_login || $user->user_email == $user_login) {
                if (Hash::check($password, $user->user_password)) {

                    //buat Session User
                    $data = [
                        'user_id' => $user->user_id,
                        'user_username' => $user->user_username,
                        'user_role' => $user->user_role,
                        'user_name' => $user->user_name,
                        'user_email' => $user->user_email
                    ];

                    $request->session()->put($data);

                    if ($user->user_role == 1) {
                        return redirect('/dashboard');
                    } else if ($user->user_role == 2) {
                        return redirect('/');
                    } else {
                        return redirect('/login');
                    }
                } else {
                    return redirect('/login');
                }
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function register_process(Request $request)
    {
        $request->validate(
            [
                'name'  => 'required',
                'username'  => 'required',
                'email'  => 'required',
                'new_password'  => 'required',
                'retype_password'  => 'required|same:new_password'
            ],
            ['new_password.required' => 'The password field is required.']
        );

        $data = [
            'user_name' => $request->name,
            'user_username' => $request->username,
            'user_email' => $request->email,
            'user_password' => Hash::make($request->password),
            'user_role' => 2,
            'user_image' => "default.jpeg"
        ];

        DB::table('users')->insert($data);

        Session::flash('success', 'Register Success');
        return redirect('/login');
    }

    public function forgotpassword()
    {
        return view('auth/forgotpassword');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        Session::flash('success', 'Logout Success');
        return redirect('/login');
    }

    public function blocked(Request $request)
    {
        return view('auth/blocked');
    }
}
