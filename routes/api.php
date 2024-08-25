<?php

use App\Http\Controllers\V1\Auth\AuthController;
use App\Http\Controllers\V1\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth/user')->group(function(){
    Route::post('/login' , [AuthController::class , 'login']);
    Route::post('/register' , [AuthController::class , 'register']);
    Route::middleware('auth:api')->group(function(){
        Route::post('/logout' , [AuthController::class , 'logout']);
        Route::get('/get/user' , [AuthController::class , 'getUser']);
    });
});

Route::prefix('product/')->middleware('auth:api')->group(function(){
    Route::get('/index' , [ProductController::class , 'index']);
    Route::post('/store' , [ProductController::class , 'store']);
    Route::get('/show/{product}' , [ProductController::class , 'show']);
    Route::put('/update/{product}' , [ProductController::class , 'update']);
    Route::delete('/delete/{product}' , [ProductController::class , 'destroy']);
});