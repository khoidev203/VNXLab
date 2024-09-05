<?php

use App\Http\Controllers\Api\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')
    ->prefix('comments')
    ->group(function () {

        Route::post('/', [CommentController::class, 'store']);
        // lấy ra toàn bộ comment theo tên sản phẩm
        Route::get('{id}', [CommentController::class, 'show']);

        Route::delete('{id}', [CommentController::class, 'destroy']);
    });
