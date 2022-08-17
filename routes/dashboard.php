<?php

use App\Http\Controllers\Arcadous\ArcadousTestController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth','isVerified'])->group(function () {

    // dashboard Home
    Route::get('Home', [DashboardController::class,'index'])->name('dashboard');
    Route::get('Profile', [DashboardController::class,'profile'])->name('dashboard.profile');
    Route::get('Users', [DashboardController::class,'users'])->name('dashboard.users');

    // Test
    Route::get('save-token', [ArcadousTestController::class,'saveCurrentUserToken'])->name('dashboard.save-token');
    Route::post('Notify-users', [ArcadousTestController::class,'notifyAllUsers'])->name('dashboard.notify-users');

});









