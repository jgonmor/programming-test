<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('/staff/{id}', [AdminController::class, 'staff'])->name('admin.staff');
Route::post('/send-invitation', [AdminController::class, 'createStaff'])->name('admin.send-invitation');
Route::put('/staff/{id}', [AdminController::class, 'staffUpdate'])->name('admin.staff.update');
Route::delete('/staff/{id}', [AdminController::class, 'staffRemove'])->name('admin.staff.remove');

Route::get('/policy/{id}', [AdminController::class, 'policy'])->name('admin.policy');
Route::put('/policy/remove/{id}', [AdminController::class, 'policyRemove'])->name('admin.policy.remove');
Route::put('/policy/{id}/{staff_id}', [AdminController::class, 'policyAssign'])->name('admin.policy.assign');