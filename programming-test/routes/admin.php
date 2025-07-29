<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('/staff/{id}', [AdminController::class, 'staff'])->name('admin.staff');
