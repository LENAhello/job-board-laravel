<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/job', [JobController::class, 'index']);

Route::get('/about', [JobController::class, 'about']);
Route::get('/contact', [JobController::class, 'contact']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);

Route::get('/blog/{id}', [PostController::class, 'show']);

Route::get('/comment/create', [CommentController::class, 'create']);