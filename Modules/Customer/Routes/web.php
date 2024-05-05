<?php

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\AuthCustomerController;


Route::as('auth.customer.')->prefix('/auth/customer/')->group(function () {

    Route::get('login' ,[ AuthCustomerController::class , 'loginPage'])->name('loginPage');
    Route::post('login' ,[ AuthCustomerController::class , 'login'])->name('login');
    Route::get('verification' ,[ AuthCustomerController::class , 'verification'])->name('verification');
    Route::post('verify' ,[ AuthCustomerController::class , 'verify'])->name('verify');

});
