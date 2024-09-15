<?php 

use App\Http\Controllers\Web\TagController;
use Illuminate\Support\Facades\Route;

Route::resource('tags', TagController::class);
