<?php


use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AuthAdminController;

Route::as('panel.admin.')->prefix('/admin/')->middleware(['auth:admin'])->group(function () {

    Route::get('profile' ,[ AdminController::class , 'edit'])->name('profile.page.edit');//editing
    Route::post('profile' ,[ AdminController::class , 'update'])->name('update.profile.update');//updating
    Route::get('index/page' ,[ AdminController::class , 'index'])->name('index.page');
    Route::post('/logout', [AuthAdminController::class , 'logout'])->name('logout');

});
