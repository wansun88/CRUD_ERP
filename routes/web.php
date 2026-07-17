<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return redirect('/customers');
// });


Route::get('/', DashboardController::class)->name('dashboard');

Route::resource('customers', CustomerController::class);
