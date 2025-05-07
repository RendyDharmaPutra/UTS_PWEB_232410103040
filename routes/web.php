<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/login', [PageController::class, 'loginPage'])->name('login');
Route::match(['get', 'post'], '/dashboard', [PageController::class, 'dashboardPage'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaanPage'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');

Route::post('/login', [PageController::class, 'loginAction'])->name('login');
Route::post('/logout', [PageController::class, 'logoutAction'])->name('logout');
