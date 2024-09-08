<?php


use App\Http\Controllers\Api\OwnerController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')
    ->prefix('owners')
    ->group(function () {
        Route::get('/', [OwnerController::class, 'index']);
        Route::post('/', [OwnerController::class, 'store']);
        Route::get('{id}', [OwnerController::class, 'show']);
        Route::put('{id}', [OwnerController::class, 'update']);
        Route::delete('{id}', [OwnerController::class, 'destroy']);
    });
    