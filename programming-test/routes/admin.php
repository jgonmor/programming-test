<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('/staff/{id}', [AdminController::class, 'staff'])->name('admin.staff');

Route::get('/policy/{id}', [AdminController::class, 'policy'])->name('admin.policy');
Route::put('/policy/remove/{id}', [AdminController::class, 'policyRemove'])->name('admin.policy.remove');
Route::put('/policy/{id}/{staff_id}', [AdminController::class, 'policyAssign'])->name('admin.policy.assign');
