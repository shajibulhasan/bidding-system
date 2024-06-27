<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\RunningBidIndexController;
use App\Http\Controllers\RunningBidUserController;
use App\Http\Controllers\MyBidController;
use App\Http\Controllers\CreateBidController;
use App\Http\Controllers\AdminController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/',[IndexController::class, 'index']);
Route::get('/userDashboard',[UserDashboardController::class, 'index']);
Route::get('/runningBidIndex',[RunningBidIndexController::class, 'index']);
Route::get('/runningBidUser',[RunningBidUserController::class, 'index']);
Route::get('/myBid',[MyBidController::class, 'index']);
Route::get('/createBid',[CreateBidController::class, 'index']);
Route::get('/admin',[AdminController::class, 'index']);