<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage'])
    ->name('homepage');
Route::get('/login', [PageController::class, 'showLogin'])
    ->name('login');
Route::post('/login', [PageController::class, 'login'])
    ->name('login.process');
Route::get('/profile', [PageController::class, 'showProfile'])
    ->name('profile');
Route::get('/dashboard', [PageController::class, 'showDashboard'])
    ->name('dashboard');
Route::get('/layanankami', [PageController::class, 'showLayanan'])
    ->name('layanan');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])
    ->name('pengelolaan');
