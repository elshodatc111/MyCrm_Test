<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PaymeOneController;
=======

use App\Http\Controllers\User\PaymeController; 
use App\Http\Controllers\Api\ApiController; 

>>>>>>> 5288082 (Save)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD
Route::post('/payme1',[PaymeOneController::class, 'index']);
=======
Route::post('/payme', [PaymeController::class, 'index']);

Route::get('/setting', [ApiController::class, 'setting']);
Route::post('/setting/update', [ApiController::class, 'update']);
Route::get('/sms', [ApiController::class, 'smsCount']);
Route::post('/sms/plus', [ApiController::class, 'smsCountPlus']);
Route::post('/active', [ApiController::class, 'active']);

Route::get('/cours', [ApiController::class, 'cours']);
>>>>>>> 5288082 (Save)
