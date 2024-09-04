
<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('home')
->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});