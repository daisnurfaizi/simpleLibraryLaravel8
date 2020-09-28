<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
// admin route
Route::get('/', [HomeController::class, 'index'])->name('home');
