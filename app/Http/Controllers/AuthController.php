<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginUser(Request $request) {
        if ($request->method()==='GET') {
            return view('auth.login');
        }else { 
            $credentials = $request->validate([
                            'name' => 'required|string|max:255',
                            'email' => 'required|string|email|max:255|unique:users',
                            'password' => 'required|string|min:8|confirmed',
                        ]);        
            if (Auth::attemp($credentials)) {
                return redirect()
                   ->intendet('ListAllUsers')
                   ->with('succes', 'login realizado com sucesso');   
                     

            }
            return back()->withErrors([
                'email' => 'Credenciais inválidas.'
            ])->withInput();
            }
            }

    public function logoutUser(Request $request) {
        Auth::logout();
        return redirect()
                  ->route('login')
                  ->with('sucess', 'Logout realizado com sucesso');

        


    }
    
}
