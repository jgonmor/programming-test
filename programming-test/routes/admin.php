<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.ifa-admin-all-staff');
});