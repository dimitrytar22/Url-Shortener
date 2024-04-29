<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShortenedURLController;
use App\Http\Controllers\StatisticsController;
use App\Models\ShortenedURL;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::group(['prefix' => '/url'], function(){
    Route::post('/', [ShortenedURLController::class, 'store'])->name('shortenedurl.store');
    Route::get('/{shortenedURL}', [ShortenedURLController::class, 'show'])->name('shortenedurl.show');
});
Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
