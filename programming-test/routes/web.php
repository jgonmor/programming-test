<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/admin.php');

Route::get('/', function () {
    return view('login');
});


// Admin routes
Route::prefix('admin')->group(base_path('routes/admin.php'));