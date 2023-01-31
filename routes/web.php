<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;



Route::get('/', function () {
    return view('welcome');
});
Route::get('Ejercicio', function () {
    return view('Practicas.Practica1');
});
Route::get('Ejercicio2', function () {
    return view('Practicas.Practica2');
});
Route::get('Gato', function () {
    return view('Practicas.Gato');
});
Route::get('Crud', function () {
    return view('Practicas.Crud');
});





Route::view('/', 'Welcome');

Route::view('login', 'login')->name('login')->middleware('guest');

Route::view('Home', 'Home')->middleware('auth');

Route::get('Create',[UserController::class,'Create']);
Route::post('store',[UserController::class,'store']);
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout']);