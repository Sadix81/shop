<?php


use Illuminate\Support\Facades\Route;
use Modules\Site\Http\Controllers\SiteController;


Route::as('site.')->prefix('/site')->group(function() {
    Route::get('/' , [SiteController::class , 'index']);
    Route::get('/show/{id}' , [SiteController::class , 'show'])->name('show');
    Route::get('/products/{id?}' , [SiteController::class , 'products'])->name('products');//agar id pass nadim ok hast
});


