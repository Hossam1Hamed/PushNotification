<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [\App\Http\Controllers\SendNotification::class, 'create']);
Route::get('/', [\App\Http\Controllers\SendNotification::class, 'index']);
Route::put('/', [\App\Http\Controllers\SendNotification::class, 'edit']);
Route::delete('/', [\App\Http\Controllers\SendNotification::class, 'delete']);
