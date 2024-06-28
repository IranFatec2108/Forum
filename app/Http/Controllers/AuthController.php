<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        if ($request->method() === 'GET'){
            return view('auth.login');
        } else {
            $credentials = $request->validate([
                'email' => 'required|string|email|',
                'password' => 'required|string'
               ]);
            if (Auth::attempt($credentials)){
                return redirect()->route('teste')->with('message-sucess', 'Seja Bem Vindo ' . Auth::user()->name);
            }
            return back()->withErrors([
                'email' => 'Credenciais inválidas.',
            ])->withInput();
        }
            
    }

    public function teste() {
       
        return view('welcome');
     }

    public function logout() {
       Auth::logout();
       return redirect()->route('teste')->with('message-sucess', 'Logout realizado com sucesso');
    }
=======

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
    
>>>>>>> 50c062ae1c59dc6a034edd3c2640c42cf8c7e966
}
