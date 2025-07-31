<?php

namespace App\Http\Services;

use App\Models\User;
use App\Models\Role;
use App\Models\Invitation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationMail;

class InvitationService
{
    public function sendInvitation(string $email, string $name): bool
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            return false;
        }

        $randomPassword = Str::random(40);

        $role = Role::where('name', 'staff')->firstOrFail();

        $user = User::create([
            'email' => $email,
            'password' => bcrypt($randomPassword),
            'status' => 'invitation sent',
            'role_id' => $role->id,
            'name' => $name,
        ]);

        $token = Str::random(60);

        Invitation::create([
            'user_id' => $user->id,
            'token' => $token,
            'status' => 'pending',
        ]);

        Mail::to($email)->send(new InvitationMail($token, $user->name));

        return true;
    }
}