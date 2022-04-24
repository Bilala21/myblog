<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main_layout.layout');
});
// Route::get("/",[PostController::class,"index"])->name('index');
Route::get('/register',[CustomAuthController::class,"create"])->name('create');
Route::post('/register',[CustomAuthController::class,"store"])->name('store');
Route::get('/login',[CustomAuthController::class,"login_form"])->name('login');
Route::post('/login',[CustomAuthController::class,"check"])->name('check');
Route::get('/forgot-password',[CustomAuthController::class,"forgot_password"])->name('forgot-password');
Route::post('/forgot-password',[CustomAuthController::class,"check_email"])->name('forgot-password');

// Protected routes

Route::prefix('user')->middleware(['guest'])->group(function(){
    Route::post('/logout', [CustomAuthController::class,"user_logout"])->name('user-logout');
    Route::get('/dashboard', [CustomAuthController::class,"dashboard"])->name('dashboard');
});
