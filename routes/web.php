<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/job', [JobController::class, 'index']);

Route::get('/about', [JobController::class, 'about']);
Route::get('/contact', [JobController::class, 'contact']);