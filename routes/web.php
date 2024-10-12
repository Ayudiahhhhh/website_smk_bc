<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//web
Route::get('/', [HomeController::class, 'index'])->name('home');
