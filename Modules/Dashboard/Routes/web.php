<?php



use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

Route::as('admin.')->prefix('admin')->group(function() {
    Route::get('Home/Page', [DashboardController::class ,'index'])->name('home.page');
});
