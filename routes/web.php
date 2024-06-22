<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\RunningBidIndexController;
use App\Http\Controllers\RunningBidUserController;
use App\Http\Controllers\MyBidController;
use App\Http\Controllers\CreateBidController;
use App\Http\Controllers\CustomAuthController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/',[IndexController::class, 'index']);
Route::get('/userDashboard',[UserDashboardController::class, 'index']);
Route::get('/runningBidIndex',[RunningBidIndexController::class, 'index']);
Route::get('/runningBidUser',[RunningBidUserController::class, 'index']);
Route::get('/myBid',[MyBidController::class, 'index']);
Route::get('/createBid',[CreateBidController::class, 'index']);


//registration and login 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/userDashboard', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');