<?php

use App\Http\Controllers\Api\AuthorController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')
    ->prefix('authors')
    ->group(function () {
        Route::get('/', [AuthorController::class, 'index']);
        Route::post('/', [AuthorController::class, 'store']);
        Route::get('{id}', [AuthorController::class, 'show']);
        Route::put('{id}', [AuthorController::class, 'update']);
        Route::delete('{id}', [AuthorController::class, 'destroy']);
    });
    