<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('jobs/category/{id}', [CategoryController::class, 'show'])->name('jobs.showCategory');
// Remote jobs
Route::get('/jobs/remote', [JobController::class, 'showRemote'])->name('jobs.remote');
// On-site jobs
Route::get('/jobs/onsite', [JobController::class, 'showOnsite'])->name('jobs.onsite');


Route::get('/register', [AuthController::class, 'signupForm'])->name('auth.signup');
Route::post('/register', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/profile', [AuthController::class, 'profile'])->name('auth.profile');

// AUTH middleware
Route::middleware('auth')->group(function () {
    Route::resource('jobs', JobController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/jobs/manage', [JobController::class, 'manage'])->name('jobs.manage');
});