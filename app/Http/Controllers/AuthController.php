<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginUser(Request $request) {
        if ($request->method()==='GET') {
            return view('auth.login');
        }else {
            $email = $request->email;
            $password = $request->password;
            $credentials = $request->only('email', 'password');
            print($email . " - " . $password . "<br>");
            print_r($credentials);

        }


    }
    
}
