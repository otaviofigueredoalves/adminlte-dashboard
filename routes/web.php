<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/usuarios',[UserController::class,'index'])->name('users.index');
    Route::get('/usuarios/{user}/editar',[UserController::class,'edit'])->name('users.edit');
    Route::put('/usuarios/{user}/editar',[UserController::class,'update'])->name('users.update');
    Route::put('/perfil/{user}/editar',[UserController::class,'updateProfile'])->name('users.updateProfile');
    Route::put('/interesses/{user}/editar',[UserController::class,'updateInterests'])->name('users.updateInterests');
    Route::put('/cargo/{user}/editar',[UserController::class,'updateRole'])->name('users.updateRole');
});
