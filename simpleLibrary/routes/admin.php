<?php

use App\Http\Controllers\Admin\HomeController;
// admin route
Route::get('/', [HomeController::class, 'index'])->name('admin');
