<?php


use Illuminate\Support\Facades\Route;
use Modules\Favourite\Http\Controllers\FavouriteController;

Route::as('favourite.product.')->prefix('/favourite/product')->middleware(['Auth:customer'])->group(function (){
   Route::get('/index' ,[ FavouriteController::class , 'index'])->name('show');
   Route::post('/store/{id}' , [FavouriteController::class , 'store'])->name('select');
   Route::post('/delete/{id}' , [FavouriteController::class , 'destroy'])->name('delete');
});
