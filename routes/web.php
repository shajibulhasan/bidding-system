<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\ValidateUser;
use App\Http\Middleware\ValidateAdmin;
use App\Http\Middleware\ValidateGuest;
use App\Http\Middleware\ValiateLogin;
use App\Http\Controllers\HelpSupportController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/userDashboard',[UserDashboardController::class, 'index'])->name('userDashboard')->middleware(ValidateUser::class);
Route::post('/runningBidUser/{id}', [UserDashboardController::class, 'biddingPrice'])->name('biddingprice.post')->middleware(ValidateUser::class); 
Route::get('/runningBidUser',[UserDashboardController::class, 'runningBid'])->name('runningBidUser')->middleware(ValidateUser::class);
Route::get('/myBid',[UserDashboardController::class, 'myBid'])->name('myBid')->middleware(ValidateUser::class);
Route::view('/create', 'createBid')->name('create')->middleware(ValidateUser::class);
Route::post('/createBid',[UserDashboardController::class, 'requestBid'])->name('createbid.post')->middleware(ValidateUser::class);
Route::post('/updateBid/{id}',[UserDashboardController::class, 'updateBid'])->name('updateBid')->middleware(ValidateUser::class);
Route::get('/bidUpdate/{id}',[UserDashboardController::class, 'bidUpdate'])->name('bidUpdate')->middleware(ValidateUser::class);
Route::get('/updateView/{id}',[UserDashboardController::class, 'bidView'])->name('updateView')->middleware(ValidateUser::class);
Route::get('/bidDelete/{id}',[UserDashboardController::class, 'bidDelete'])->name('bidDelete')->middleware(ValidateUser::class);


Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware(ValidateAdmin::class);
Route::get('/deleteBid/{id}',[AdminController::class, 'deleteBid'])->name('deleteBid')->middleware(ValidateAdmin::class);
Route::get('/approveBid/{id}',[AdminController::class, 'approveBid'])->name('approveBid')->middleware(ValidateAdmin::class);
Route::get('/totalBid',[AdminController::class, 'totalBid'])->name('totalBid')->middleware(ValidateAdmin::class);
Route::get('/requestedBid',[AdminController::class, 'requestedBid'])->name('requestedBid')->middleware(ValidateAdmin::class);
Route::get('/runningBidAdmin',[UserDashboardController::class, 'runningBid'])->name('runningBidAdmin')->middleware(ValidateAdmin::class);



//registration and login 
Route::get('/',[CustomAuthController::class, 'guestDashboard'])->name('index')->middleware(ValidateGuest::class);
Route::get('/runningBidIndex',[CustomAuthController::class, 'runningBid'])->name('runningBidIndex')->middleware(ValidateGuest::class);
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware(ValidateGuest::class); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login')->middleware(ValidateGuest::class);
Route::post('/userDashboard', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware(ValidateGuest::class); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user')->middleware(ValidateGuest::class);
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.post')->middleware(ValidateGuest::class); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('change/password', [CustomAuthController::class, 'changePassword'])->name('change.password')->middleware(ValiateLogin::class); 
Route::post('update/profile', [CustomAuthController::class, 'updateProfile'])->name('update.profile')->middleware(ValiateLogin::class); 
Route::view('/pass', 'changePass')->name('pass')->middleware(ValiateLogin::class);
Route::view('/update', 'updateProfile')->name('update')->middleware(ValiateLogin::class);
Route::view('/profile', 'myProfile')->name('profile')->middleware(ValiateLogin::class);
Route::view('/test', 'test')->name('test');

Route::get('contact', [HelpSupportController::class, 'contact'])->name('contact');
Route::get('faqs', [HelpSupportController::class, 'faqs'])->name('faqs');