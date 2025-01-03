<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [RegisterController::class, 'logout']);
});
