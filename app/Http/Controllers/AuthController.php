<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function registrationForm(){
        return view('register');
    }

    public function loginForm(){
        return view('login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email'
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        return redirect('/login')->with('Message', 'Your account has been created.');



    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        $login = auth()->attempt([
            'email' => $request->email,
            'password' =>$request->password
        ]);

        if(!$login){
            return back()->with('Error', 'Invalid credentials');
        }

        return redirect('/items');

    }
    public function logout(Request $request){
        auth()->logout();
        return redirect('/')->with('Message', 'Successfully Logged out');
    }

}
