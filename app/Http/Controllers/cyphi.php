<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cyphi extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required'
        ]);

            $user = User::create($fields);
            auth()->login($user);
            return redirect('/')->with('success', 'Registration successful! Welcome to our platform.');
        
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return view('home');
        }
    }

    public function logout(){
        Auth::logout();
        return view('home');
    }
}
