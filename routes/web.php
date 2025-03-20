<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
Route::get('/', function () {
    return view('main.home');
});

Route::middleware(['guest'])->group(function () {
   Route::view('/login', 'auth.login')->name('login');
   Route::view('/register', 'auth.register')->name('register');
   Route::view('/verify', 'auth.verify')->name('verify');
   Route::view('/confirmition', 'auth.confirmition')->name('confirmition');
   Route::view('/contact' , 'main.contact')->name('contact');
   Route::view('/home' , 'main.home')->name('home');
});


use App\Http\Controllers\AuthController;
