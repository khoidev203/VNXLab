<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\FaqController;

Route::resource('faqs', FaqController::class);

