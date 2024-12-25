<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

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
