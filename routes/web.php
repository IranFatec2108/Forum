<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
=======
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AuthController;


>>>>>>> 50c062ae1c59dc6a034edd3c2640c42cf8c7e966
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
<<<<<<< HEAD
Route::get('/', 
[AuthController::class, 'teste'])->name('teste');

Route::match(['get', 'post'], '/login',
 [AuthController::class, 'login'])->name('login');

Route::match(['get', 'post'], '/register', 
[UserController::class, 'register'])->name('register');

Route::get('/logout', 
[AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/users', 
    [UserController::class, 'listAllUsers'])->name('listAllUsers');

    Route::get('/users/{id}', 
    [UserController::class, 'listUserById'])->name('listUserById');

    Route::put('/users/{id}/update', 
    [UserController::class, 'updateUser'])->name('updateUser');
    
    Route::delete('/users/{id}', 
    [UserController::class, 'deleteUser'])->name('deleteUser');

    Route::get('/Posts/{id}', 
    [PostController::class, 'listPostById'])->name('listPostById');

    Route::put('/Posts/{id}/update', 
    [PostController::class, 'updatePost'])->name('updatePost');

    Route::get('/Posts/{id}/delete',
     [PostController::class, 'deletePost'])->name('deletePost');

    Route::match(['get', 'post'], '/createPost', 
    [PostController::class, 'createPost'])->name('createPost');

    Route::match(['get', 'post'], '/listAllPosts',
    [PostController::class, 'listAllPosts'])->name('listAllPosts');
});
=======

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
>>>>>>> 50c062ae1c59dc6a034edd3c2640c42cf8c7e966
