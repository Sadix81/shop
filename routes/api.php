<?php

use App\Http\Controllers\V1\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth/user')->group(function(){
    Route::post('/login' , [AuthController::class , 'login']);
    Route::post('/register' , [AuthController::class , 'register']);
    Route::middleware('auth:api')->group(function(){
        Route::post('/logout' , [AuthController::class , 'logout']);
    });
});