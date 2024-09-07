<?php

use App\Http\Controllers\V1\Auth\AuthController;
use App\Http\Controllers\V1\Category\CategoryController;
use App\Http\Controllers\V1\Product\ProductController;
use App\Http\Controllers\V1\Profile\ProfileController;
use App\Http\Controllers\V1\User\Profile\UserProfileUpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth/user')->group(function(){
    Route::post('/login' , [AuthController::class , 'login'])->name('login');
    Route::post('/register' , [AuthController::class , 'register']);
    Route::middleware('auth:api')->group(function(){
        Route::post('/logout' , [AuthController::class , 'logout']);
        Route::get('/get/user' , [AuthController::class , 'getUser']);
        Route::get('/profile' , [UserProfileUpdateController::class , 'index']);
        Route::put('/profile/update/{user}' , [UserProfileUpdateController::class , 'update']);
    });
});

Route::prefix('V1/product/')->middleware('auth:api')->group(function(){
    Route::get('/index' , [ProductController::class , 'index']);
    Route::post('/store' , [ProductController::class , 'store']);
    Route::get('/show/{product}' , [ProductController::class , 'show']);
    Route::put('/update/{product}' , [ProductController::class , 'update']);
    Route::delete('/delete/{product}' , [ProductController::class , 'destroy']);
});

Route::prefix('V1/category/')->middleware('auth:api')->group(function(){
    Route::get('/index' , [CategoryController::class , 'index']);
    Route::post('/store' , [CategoryController::class , 'store']);
    Route::get('/show/{category}' , [CategoryController::class , 'show']);
    Route::put('/update/{category}' , [CategoryController::class , 'update']);
    Route::delete('/delete/{category}' , [CategoryController::class , 'destroy']);
});