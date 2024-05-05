<?php

use Illuminate\Support\Facades\Route;
use Modules\Filemanager\Http\Controllers\FilemanagerController;


Route::get('filemanager', [FileManagerController::class, 'index']);



