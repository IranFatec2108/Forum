<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function listAllUsers() {
        //lógica
        return view('users.listAllUsers');
    }

    public function listUserByID() {


    }

    public function createUser() {
        

    }
}
