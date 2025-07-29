<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->status = 'active';
        $user->save();

        $user = new User();

        $user->name = 'staff';
        $user->email = 'staff@example.com';
        $user->password = bcrypt('staff');
        $user->role_id = 2;
        $user->status = 'active';
        $user->save();

        $user = new User();

        $user->name = 'staff2';
        $user->email = 'staff2@example.com';
        $user->password = bcrypt('staff');
        $user->role_id = 2;
        $user->save();
    }
}
