<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin1@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User2',
            'email' => 'admin2@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User3',
            'email' => 'admin3@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User4',
            'email' => 'admin4@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User5',
            'email' => 'admin5@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin User6',
            'email' => 'admin6@example.com',
            'password' => bcrypt('password'), // Make sure to hash the password
            'role' => 'admin',
        ]);
    }
}
