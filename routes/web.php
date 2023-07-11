<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\investorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('investors.investors_dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','user_type:users'])->group(function(){

Route::controller(adminController::class)->group(function(){
   Route::get('/dashboard1', 'dashboard1');
    Route::get('/investors', 'investors');
    Route::get('/dashboard2', 'dashboard2');
    Route::get('/dashboard3', 'dashboard3');
    Route::get('/dashboard4', 'dashboard4');
    Route::get('/dashboard5', 'dashboard5');
    Route::get('/dashboard6', 'dashboard6');
    Route::get('/dashboard7', 'dashboard7');
    Route::get('/dashboard8', 'dashboard8');
    Route::get('/dashboard9', 'dashboard9');
    Route::get('/dashboard10', 'dashboard10');
    Route::get('/dashboard11', 'dashboard11');
    Route::get('/notifications', 'notofication');
    Route::get('/terms_conditions', 'terms_conditions');
    Route::get('/checkout', 'checkout');
    Route::get('/login1', 'login1');
        });
    });
   
    Route::get('investors', ['uses'=>'App\Http\Controllers\investorController@index', 'as'=>'investor.index']);
    Route::controller(investorController::class)->group(function(){
       Route::get('/investors_dashboard', 'investors_dashboard');
      //  Route::get('investors_dashboard', ['uses'=>'App\Http\Controllers\investorController@index', 'as'=>'investor.index']);
             });
       Route::get('/logout',  [adminController::class, 'AdminLogout'] )->name('admin.logout');

require __DIR__.'/auth.php';
