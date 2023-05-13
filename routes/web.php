<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('index');



Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('auth', [AuthController::class, 'auth'])->name('auth');

Route::resource('admin/admin', PostController::class);
