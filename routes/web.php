<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\RunningBidIndexController;
use App\Http\Controllers\RunningBidUserController;
use App\Http\Controllers\RunningBidAdminController;
use App\Http\Controllers\MyBidController;
use App\Http\Controllers\CreateBidController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\totalBidController;
use App\Http\Controllers\RequestedBidController;
use App\Http\Middleware\ValidateUser;
use App\Http\Middleware\ValidateAdmin;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/userDashboard',[UserDashboardController::class, 'index'])->name('userDashboard')->middleware(ValidateUser::class);
Route::post('/runningBidUser/{id}', [UserDashboardController::class, 'biddingPrice'])->name('biddingprice.post')->middleware(ValidateUser::class); 
Route::get('/runningBidUser',[UserDashboardController::class, 'runningBid'])->name('runningBidUser')->middleware(ValidateUser::class);
Route::get('/myBid',[UserDashboardController::class, 'myBid'])->name('myBid')->middleware(ValidateUser::class);
Route::view('/create', 'createBid')->name('create')->middleware(ValidateUser::class);
Route::post('/createBid',[UserDashboardController::class, 'requestBid'])->name('createbid.post')->middleware(ValidateUser::class);


Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware(ValidateAdmin::class);
Route::get('/deleteBid/{id}',[AdminController::class, 'deleteBid'])->name('deleteBid')->middleware(ValidateAdmin::class);
Route::get('/approveBid/{id}',[AdminController::class, 'approveBid'])->name('approveBid')->middleware(ValidateAdmin::class);
Route::get('/totalBid',[AdminController::class, 'totalBid'])->name('totalBid')->middleware(ValidateAdmin::class);
Route::get('/requestedBid',[AdminController::class, 'requestedBid'])->name('requestedBid')->middleware(ValidateAdmin::class);
Route::get('/runningBidAdmin',[UserDashboardController::class, 'runningBid'])->name('runningBidAdmin')->middleware(ValidateAdmin::class);



//registration and login 
Route::get('/',[CustomAuthController::class, 'guestDashboard'])->name('index');
Route::get('/runningBidIndex',[CustomAuthController::class, 'runningBid'])->name('runningBidIndex');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/userDashboard', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.post'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');