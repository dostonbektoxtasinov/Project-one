<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('index');


// auth
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');


// admin panel
Route::get('/siz_admin_panelga_kirdingiz', [AuthController::class, 'siz_admin_panelga_kirdingiz'])->name('siz_admin_panelga_kirdingiz');
Route::resource('admin/main', PostController::class);
Route::resource('admin/about', AboutController::class);
Route::resource('admin/table', TableController::class);
Route::resource('admin/team', TeamController::class);
