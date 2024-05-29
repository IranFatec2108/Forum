<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function listAllUsers(Request $request) {
        //lógica
        return view('users.listAllUsers');
    }

    public function listUser( Request $request, $uid) {
        print($uid);
    }

    public function createUser() {
        

    }
}
