<?php

use App\Livewire\AcceptInvitation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

require base_path('routes/login.php');
require base_path('routes/admin.php');
require base_path('routes/staff.php');

//Login
Route::prefix('/')->group(base_path('routes/login.php'));

//Register
Route::get('/invitation/accept/{token}', AcceptInvitation::class)->name('invitation.accept');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(base_path('routes/admin.php'));
});

// Staff routes
Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::prefix('staff')->group(base_path('routes/staff.php'));
});

Route::get('/test-mail', function () {
    Mail::raw('This is a test email from Laravel and Mailtrap!', function ($message) {
        $message->to('test@example.com')
            ->subject('Test Mailtrap Email');
    });

    return 'Test email sent!';
});
