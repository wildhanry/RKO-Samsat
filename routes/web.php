<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RkoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SheetsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/kons', function () {
    return view('kons');
});

Route::get('/login', function () {
    return view('login.index'); 
})->name('login');

Route::get('/register', function () {
    return view('register.index'); 
})->name('register');

Route::get('/rko', [RkoController::class, 'showData']);

Route::post('/rko/add', [RkoController::class, 'addData']);



Route::get('/sheets', [SheetsController::class, 'index'])->name('sheets.index');


