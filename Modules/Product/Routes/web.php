<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\ProductController;


Route::as('product.')->prefix('/product')->middleware('Auth:admin')->group(function (){
    Route::resource('/' , ProductController::class)->parameters(['' => 'id']);
});
