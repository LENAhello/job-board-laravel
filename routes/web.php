<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('jobs/category/{id}', [CategoryController::class, 'show'])->name('jobs.showCategory');

Route::resource('jobs', JobController::class);
