<?php

use App\Http\Controllers\Web\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->prefix('categories')
    ->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('{id}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });