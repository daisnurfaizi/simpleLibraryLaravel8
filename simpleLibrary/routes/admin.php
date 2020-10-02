<?php

use App\Http\Controllers\Admin\AdminDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
// admin route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/author/data', [AdminDataController::class, 'authors'])->name('author');
