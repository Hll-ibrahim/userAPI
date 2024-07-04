<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'auth'],function ($router) {
    Route::post('/register', [AuthController::class,'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('/me', [AuthController::class,'me'])->name('me');
    Route::get('/users', [AuthController::class,'index'])->name('index');
    Route::delete('/delete/{id}', [AuthController::class,'destroy'])->name('delete');
});
