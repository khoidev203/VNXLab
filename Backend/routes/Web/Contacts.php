<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ContactController;

Route::middleware('web')
    ->prefix('contacts')
    ->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        Route::get('create', [ContactController::class, 'create'])->name('contact.create');
        Route::post('/', [ContactController::class, 'store'])->name('contact.store');
        Route::get('{id}', [ContactController::class, 'show'])->name('contact.show');
        Route::get('{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('{id}', [ContactController::class, 'update'])->name('contact.update');
        Route::delete('{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    });
