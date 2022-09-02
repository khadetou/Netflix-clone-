<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntityContorller;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [EntityContorller::class, 'index']);


// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Show Register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Create new User
Route::post('/users', [UserController::class, 'create_user']);

// Log in user
Route::post('/users/authenticate', [UserController::class, 'login_user']);

// Log out user
Route::post('/logout', [UserController::class, 'logout_user'])->middleware('auth');