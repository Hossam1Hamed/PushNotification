<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

// posts routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/send-notification', [\App\Http\Controllers\SendNotification::class, 'sendNoti']);

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

});

Route::post('/', [\App\Http\Controllers\SendNotification::class, 'create']);
Route::get('/', [\App\Http\Controllers\SendNotification::class, 'index']);
Route::put('/', [\App\Http\Controllers\SendNotification::class, 'edit']);
Route::delete('/', [\App\Http\Controllers\SendNotification::class, 'delete']);
