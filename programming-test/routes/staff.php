<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/{user_id}', [StaffController::class, 'index'])
    ->middleware('staff.dashboard')
    ->name('staff');

Route::get('policy/{id}', [StaffController::class, 'viewPolicy'])
    ->middleware('staff.own-policy')
    ->name('staff.policy');
