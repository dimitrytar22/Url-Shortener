<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ShortenedURLController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('throttle:api')->group(function () {

    Route::group(['prefix' => 'v1'], function () {
        Route::post('/register', [\App\Http\Controllers\Api\V1\AuthController::class, 'register']);
        Route::post('/login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login']);
    });

    Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
        Route::post('/logout', [\App\Http\Controllers\Api\V1\AuthController::class, 'logout']);


    });
});
