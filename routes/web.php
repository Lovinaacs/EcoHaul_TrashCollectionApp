<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\RedeemController;
use Illuminate\Support\Facades\Auth;
use App\Models\Newsletter;
use App\Models\Trheader;

Route::get('/', function () {
    return view('welcome');
});

// Pick Up
Route::get('/pickup', [TransactionController::class, 'viewPickUp'])->name('pickup');

Route::post('/pickup', [TransactionController::class, 'storePickUp'])
    ->name('pickup.store')
    ->middleware('auth');


// Drop Off
Route::get('/dropoff', [TransactionController::class, 'viewDropOff'])->name('dropoff');

Route::post('/dropoff', [TransactionController::class, 'storeDropOff'])
     ->name('dropoff.store')
     ->middleware('auth');

// Profile
Route::get('/profile', [UserController::class, 'showInfo'])->name('profile')->middleware('auth');


// Display the signup form
Route::get('/signup', [UserController::class, 'showSignupForm'])->name('signup.show');

// Handle the signup form submission
Route::post('/signup', [UserController::class, 'handleSignup'])->name('signup');

// About
Route::get('/about', function(){
    return view('about');
})->name('about');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Log out
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Newsletter
Route::get('/newsletter',[NewsletterController::class,'showList'])->name('newsletter.list');

// Rewards
Route::get('/redeem_rewards', [RewardController::class, 'showRewards'])->name('rewards');
Route::post('/redeem_rewards', [RedeemController::class, 'redeemRewards'])->name('redeem.rewards')->middleware('auth');

// Update Profile
Route::put('/profile/update', [UserController::class,'update'])->name('profile.update');

// Home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Transaction Success
Route::get('/success', function () {
    return view('success');
})->name('success');

// Transaction History
Route::get('/transaction_history', [TransactionController::class, 'showTransactions'])->name('transaction.history');

// Redeem History
Route::get('/redeem_history', [RedeemController::class, 'showRedeemHistory'])->name('redeem.history');
Route::post('/transaction/cancel/{id}', [TransactionController::class, 'cancelTransaction'])->name('transaction.cancel');


