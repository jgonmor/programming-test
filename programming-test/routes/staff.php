<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/{user_id}', [StaffController::class, 'index'])->name('staff');
Route::get('policy/{id}', [StaffController::class, 'viewPolicy'])->name('staff.policy');
