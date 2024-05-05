<?php

use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Controllers\CommentController;


Route::as('comment.')->prefix('/comment')->group(function (){
    Route::resource('/' , CommentController::class)->parameters(['' => 'id']);
});
