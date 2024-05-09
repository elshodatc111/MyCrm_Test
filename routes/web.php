<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TecherController;

Auth::routes(['verify' => true]);

Route::get('/', [OnlineController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/profel', [HomeController::class, 'profel'])->name('profel');
Route::get('/profel/show/{id}', [HomeController::class, 'show'])->name('profel_show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/cours/show/{id}', [CoursController::class, 'show'])->name('cours_show');

Route::get('/book', [BookController::class, 'index'])->name('book');

Route::get('/techer', [TecherController::class, 'index'])->name('techer');
