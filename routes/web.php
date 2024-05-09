<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineController;

Auth::routes(['verify' => true]);

Route::get('/', [OnlineController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/profel', [HomeController::class, 'profel'])->name('profel');
