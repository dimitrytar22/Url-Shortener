<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ShortenedURLController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(['as' => 'shortenedurl.'], function(){
    Route::post('/', [ShortenedURLController::class, 'store'])->name('store');
    Route::put('/{shortenedUrl}', [ShortenedURLController::class, 'update'])->name('update');
    Route::delete('/{shortenedUrl}', [ShortenedURLController::class, 'destroy'])->name('destroy');
});
