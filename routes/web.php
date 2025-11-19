<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class, 'performRegister'])->name('register');

Route::get('/login',[AuthController::class, 'showlogin'])->name('login.form');
Route::post('/login',[AuthController::class, 'performlogin'])->name('login');

Route::get('\logout', function (){

});
Route::view('index', 'index');