<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics.index');

