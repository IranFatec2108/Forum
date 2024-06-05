<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function listAllUsers(Request $request)
    {
        // lógica para listar todos os usuários
        return view('users.listAllUsers');
    }

    public function listUser(Request $request, $uid)
    {
        print($uid);
    }

    public function registerUser(Request $request)
    {
        if ($request->method() === 'GET') {
            return view('users.register');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('ListAllUsers')->with('success', 'Login realizado com sucesso');
        }
    }
}
