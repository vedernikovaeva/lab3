<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return redirect('/employees'); // Перенаправляє на список співробітників
});

Route::resource('employees', EmployeeController::class);
