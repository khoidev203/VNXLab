<?php

use App\Http\Controllers\Web\AuthorController;
use Illuminate\Support\Facades\Route;



Route::middleware('web')
    ->prefix('authors')
    ->group(function () {
        Route::get('/', [AuthorController::class, 'index'])->name('author.index');
        Route::get('create', [AuthorController::class, 'create'])->name('author.create');
        Route::post('/', [AuthorController::class, 'store'])->name('author.store'); 
        Route::get('{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
        Route::put('{id}', [AuthorController::class, 'update'])->name('author.update'); 
        Route::delete('{id}', [AuthorController::class, 'destroy'])->name('author.destroy');
    });

   