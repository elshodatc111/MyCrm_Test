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
Route::get('/profel/show/videos/{mavzu_id}', [HomeController::class, 'showvideo'])->name('profel_show_video');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');

Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/cours/show/{id}', [CoursController::class, 'show'])->name('cours_show');
Route::get('/cours/show/pay/{id}', [CoursController::class, 'coursPay'])->name('cours_show_pay');

Route::get('/book', [BookController::class, 'index'])->name('book');

Route::get('/techer', [TecherController::class, 'index'])->name('techer');


Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

Route::get('/admin/cours', [HomeController::class, 'AdminCours'])->name('AdminCours');
Route::get('/admin/cours/update/{id}', [HomeController::class, 'AdminCoursUpdate'])->name('AdminCoursUpdate');
Route::post('/admin/cours/create', [HomeController::class, 'AdminCoursCreate'])->name('AdminCoursCreate');
Route::put('/admin/cours/update/{id}', [HomeController::class, 'AdminCoursUpdates'])->name('AdminCoursUpdates');
Route::get('/admin/cours/delete/{id}', [HomeController::class, 'AdminCoursDelete'])->name('AdminCoursDelete');

Route::get('/admin/cours/show/{id}', [HomeController::class, 'adminShowCours'])->name('adminShowCours');
Route::get('/admin/cours/mavzu/updates/{id}', [HomeController::class, 'adminShowMavzuUpdate'])->name('adminShowMavzuUpdate');
Route::post('/admin/cours/mavzu/create', [HomeController::class, 'adminMavzuCreate'])->name('adminMavzuCreate');
Route::put('/admin/cours/mavzu/create/update', [HomeController::class, 'adminMavzuCreateUpdate'])->name('adminMavzuCreateUpdate');
Route::get('/admin/cours/mavzu/create/delete/{id}', [HomeController::class, 'adminMavzuCreateUpdateDelete'])->name('adminMavzuCreateUpdateDelete');

Route::get('/admin/book', [HomeController::class, 'AdminBook'])->name('AdminBook');
Route::post('/admin/book/create', [HomeController::class, 'AdminBookCreate'])->name('AdminBookCreate');
Route::get('/admin/book/delete/{id}', [HomeController::class, 'AdminBookDelete'])->name('AdminBookDelete');

Route::get('/admin/techer', [HomeController::class, 'AdminTecher'])->name('AdminTecher');
Route::get('/admin/techer/delete/{id}', [HomeController::class, 'AdminTecherDelete'])->name('AdminTecherDelete');
Route::post('/admin/techer/create', [HomeController::class, 'AdminTecherCreate'])->name('AdminTecherCreate');

Route::get('/admin/user', [HomeController::class, 'AdminUser'])->name('AdminUser');

Route::get('/admin/contact', [HomeController::class, 'AdminContact'])->name('AdminContact');
Route::get('/admin/contact/del/{id}', [HomeController::class, 'AdminContactDel'])->name('AdminContactDel');

Route::post('/catigory/update', [HomeController::class, 'CatigoryUpdate'])->name('catigory_update');

Route::post('/setting/update', [HomeController::class, 'SettingUpdate'])->name('setting_update');
