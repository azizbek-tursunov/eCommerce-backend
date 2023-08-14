<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '1234567890',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach(1);
    }
}
