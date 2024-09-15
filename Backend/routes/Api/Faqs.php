<?php 
use App\Http\Controllers\Api\FaqController;
use Illuminate\Support\Facades\Route;

Route::apiResource('faqs', FaqController::class);
