<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalasyController;
use App\Http\Controllers\ConfigController;

Route::apiResource('analasy', AnalasyController::class);
Route::get('/config', [ConfigController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
