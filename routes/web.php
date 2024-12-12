<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\ShortenedURLController;
use App\Http\Controllers\StatisticsController;
use App\Models\ShortenedURL;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');
Route::get('/qrcode', [QRCodeController::class, 'index'])->name('qrcode.index');
Route::get('/{shortenedURL}', [ShortenedURLController::class, 'show'])->name('shortenedurl.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
