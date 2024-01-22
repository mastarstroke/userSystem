<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
 



Route::get('/', function () {
    return view('welcome');
});
 

Route::get('user/registered', [DashboardController::class, 'registered'])->name('user/registered');
Route::get('dashboard/user', [DashboardController::class, 'dashboard'])->name('dashboard/user');




Route::get('register/user', [RegisterController::class, 'register'])->name('register/user');

Route::post('create/user', [RegisterController::class, 'create'])->name('create/user');    
Route::post('login/user', [LoginController::class, 'login'])->name('login/user');    
Route::get('logout/user', [DashboardController::class, 'logout'])->name('logout/user');    

Route::get('auth/verify-email/{verification_code}', [RegisterController::class, 'verify_email'])->name('verify_email');

// $token = $request->session()->token();

// $token = csrf_token();
