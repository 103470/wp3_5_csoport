<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(){
        return view('auth.register');
    }

    function login(){
        return view('auth.login');
    }

    function store (Request $request){
        $request->validate([
            "first_name" => "required|string|max:50",
            "last_name" => "required|string|max:50",
            "username" => "required|string|min:3|max:30|unique:users,username",
            "email" => "required|string|max:255|unique:users,email",
            "phone" => "required|string|max:15",
            "post_code" => "required|string|max:4",
            "city" => "required|string|max:100",
            "street" => "required|string|max:100",
            "h_number" => "required|string|max:10",
            "password" => "required|string|min:8|confirmed",
        ]);

        try{
            DB::transaction(function () use ($request) {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->post_code = $request->post_code;
            $user->city = $request->city;
            $user->street = $request->street;
            $user->h_number = $request->h_number;
            $user->password = Hash::make($request->password);
            $user->save();
            });
            
            return redirect(route("login"))
                ->with("success", "Regisztráció sikeres!");
        
        } 
        catch (\Exception $e) {
            return redirect(route("register"))
                ->with("error", "Hiba történt: " . $e->getMessage());
        }
        
    }

    function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('username', 'password'), $request->remember)) {
            return redirect()->intended('dashboard')->with('success', 'Sikeres bejelentkezés!');
        }

        return back()->with('error', 'Hibás felhasználónév vagy jelszó.');
    
    }
}
