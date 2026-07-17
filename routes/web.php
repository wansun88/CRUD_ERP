<?php
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/customers');
});

Route::resource('customers', CustomerController::class);
