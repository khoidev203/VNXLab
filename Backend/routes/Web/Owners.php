<?php

use App\Http\Controllers\Web\OwnerController;
use Illuminate\Support\Facades\Route;



Route::middleware('web')
    ->prefix('owners')
    ->group(function () {
        Route::get('/', [OwnerController::class, 'index'])->name('owner.index');
        Route::get('create', [OwnerController::class, 'create'])->name('owner.create');
        Route::post('/', [OwnerController::class, 'store'])->name('owner.store'); 
        Route::get('{id}/edit', [OwnerController::class, 'edit'])->name('owner.edit');
        Route::put('{id}', [OwnerController::class, 'update'])->name('owner.update'); 
        Route::delete('{id}', [OwnerController::class, 'destroy'])->name('owner.destroy');
    });

   