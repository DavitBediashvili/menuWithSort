<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;



Route::get('/', [MenuController::class, 'main']);
Route::post('/', [MenuController::class, 'main']);
Route::get('/admin', [MenuController::class, 'admin']);
Route::post('/admin', [MenuController::class, 'change']);
