<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TitleController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return "Welcome";
});
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/title', [TitleController::class, 'index']);