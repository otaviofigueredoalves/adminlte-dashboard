<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/usuarios',[UserController::class,'index'])->name('users.index');
});
