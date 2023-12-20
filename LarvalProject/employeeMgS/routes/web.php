<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('welcome');
});

// // Show login form
// Route::get('/login', 'LoginController@showLoginForm')->name('login.form');

// // Handle login form submission
// Route::post('/login', 'LoginController@login')->name('login.submit');



