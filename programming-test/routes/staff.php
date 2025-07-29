<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.ifa-staff-dashboard');
});
