<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(){
        return view('auth.register');
    }

    function store (Request $request){
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "username" => "required",
            "email" => "required",
            "postcode" => "required",
            "city" => "required",
            "street" => "required",
            "hnumber" => "required",
            "password" => "required",
            "cpassword" => "required"
        ]);

        try{
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->postcode = $request->postcode;
            $user->city = $request->city;
            $user->street = $request->street;
            $user->hnumber = $request->hnumber;
            $user->password = Hash::make($request->password);
            if($user->save()){
                return redirect(route("login"))
                ->with("success", "Regisztráció sikeres!");
            }
            return redirect(route("register"))
            ->with("error", "Regisztráció sikertelen!");
        } 
        catch (\Exception $e) {
            return redirect(route("register"))
                ->with("error", "Hiba történt: " . $e->getMessage());
        }
        
       


    }
}
