<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::match(
        ['get' ,'post'],
        '/login',
        [AuthController::class, 'loginUser']
    )->name('login');

    Route::match(
        ['get' ,'post'],
        '/logout',
        [AuthController::class, 'logoutUser']
    )->name('logout');

    Route::match(
        ['get' ,'post'],
        '/register',
        [UserController::class, 'registerUser']
    )->name('register');


    Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 
    'listAllUsers'])->name('ListAllUsers');

    Route::get('/users/{uid}', 
    [UserController::class, 
    'listUsers'])->name('ListUsers');

    });