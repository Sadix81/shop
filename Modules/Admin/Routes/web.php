<?php



use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AuthAdminController;


Route::as('auth.admin.')->prefix('/auth/admin/')->group(function () {

    Route::get('login' ,[ AuthAdminController::class , 'loginPage'])->name('loginPage');
    Route::post('login' ,[ AuthAdminController::class , 'login'])->name('login');
    Route::get('verification' ,[ AuthAdminController::class , 'verification'])->name('verification');
    Route::post('verify' ,[ AuthAdminController::class , 'verify'])->name('verify');

});

