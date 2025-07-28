<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/login.php');
require base_path('routes/admin.php');
require base_path('routes/staff.php');

//Login
Route::prefix('/')->group(base_path('routes/login.php'));

// Admin routes
Route::prefix('admin')->group(base_path('routes/admin.php'));

// Staff routes
Route::prefix('staff')->group(base_path('routes/staff.php'));