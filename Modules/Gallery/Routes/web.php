<?php

use Illuminate\Support\Facades\Route;
use Modules\Gallery\Http\Controllers\GalleryController;


Route::as('gallery.')->prefix('/gallery')->group(function (){
    Route::resource('/' , GalleryController::class)->parameters(['' => 'id']);
});
