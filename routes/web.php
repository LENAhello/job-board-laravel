<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('jobs/category/{id}', [CategoryController::class, 'show'])->name('jobs.showCategory');
// Remote jobs
Route::get('/jobs/remote', [JobController::class, 'showRemote'])->name('jobs.remote');
// On-site jobs
Route::get('/jobs/onsite', [JobController::class, 'showOnsite'])->name('jobs.onsite');
Route::get('/jobs/manage', [JobController::class, 'manage'])->name('jobs.manage');
Route::resource('jobs', JobController::class);
