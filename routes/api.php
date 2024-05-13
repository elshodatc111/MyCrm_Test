<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\PaymeController; 
use App\Http\Controllers\Api\ApiController; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/payme', [PaymeController::class, 'index']);

Route::get('/setting', [ApiController::class, 'setting']);
Route::post('/setting/update', [ApiController::class, 'update']);
Route::get('/sms', [ApiController::class, 'smsCount']);
Route::post('/sms/plus', [ApiController::class, 'smsCountPlus']);
Route::post('/active', [ApiController::class, 'active']);