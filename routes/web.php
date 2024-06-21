<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/',[IndexController::class, 'index']);