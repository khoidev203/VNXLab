<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\CommentController;


Route::middleware('web')
    ->prefix('comments')
    ->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('comment.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::post('/', [CommentController::class, 'store'])->name('comment.store');
        Route::get('{id}', [CommentController::class, 'show'])->name('comment.show');
        Route::delete('{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
    });

   