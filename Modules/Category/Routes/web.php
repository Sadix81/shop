<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;

Route::as('category.')->prefix('/category')->middleware('Auth:admin')->group(function (){
    Route::resource('/' , CategoryController::class)->parameters(['' => 'id']);
});


//Route::prefix('/category')->as('category.')->group(function () {
//    Route::get('/index', [CategoryController::class, 'index'])->name('index');
//    Route::get('/create', [CategoryController::class, 'create'])->name('create');
//    Route::post('/store', [CategoryController::class, 'store'])->name('store');
//    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
//    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
//    Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
//    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
//});
