<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

require __DIR__ . '/auth.php';
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['verified']], function () {
        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



});

Route::get('/feedback',[\App\Http\Controllers\FeedbackController::class, 'contact'])->name('feedback');
Route::post('/feedback',[\App\Http\Controllers\FeedbackController::class, 'send'])->name('feedback.send');
Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/statistics', [\App\Http\Controllers\StatisticsController::class, 'index'])->name('statistics.index');
Route::get('/qrcode', [\App\Http\Controllers\QRCodeController::class, 'index'])->name('qrcode.index');
Route::get('/{shortenedURL}', [\App\Http\Controllers\ShortenedURLController::class, 'show'])->name('shortenedurl.show');
Route::post('/', [\App\Http\Controllers\ShortenedURLController::class, 'store'])->name('shortenedurl.store');


