<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/job', [JobController::class, 'index']);

Route::get('/about', [JobController::class, 'about']);
Route::get('/contact', [JobController::class, 'contact']);

