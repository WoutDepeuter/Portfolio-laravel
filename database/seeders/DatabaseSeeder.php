<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqCategory;
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
        FaqCategory::create([
            'name' => 'General',
        ]);
        FaqCategory::create([
            'name' => 'Technical',
        ]);
        FaqCategory::create([
            'name' => 'Account',
        ]);
        FaqCategory::create([
            'name' => 'Other',
        ]);

        Faq::create([
            'question' => 'What is the meaning of life?',
            'answer' => 'The meaning of life is 42.',
            'category_id' => 1,
        ]);
        Faq::create([
            'question' => 'What is the answer to the ultimate question of life, the universe, and everything?',
            'answer' => '42',
            'category_id' => 1,
        ]);
        Faq::create([
            'question' => 'What is the airspeed velocity of an unladen swallow?',
            'answer' => 'What do you mean? An African or European swallow?',
            'category_id' => 1,
        ]);
        Faq::create([
            'question' => 'What is the capital of Assyria?',
            'answer' => 'I don\'t know that.',
            'category_id' => 1,
        ]);
        Faq::create([
            'question' => 'What is the airspeed velocity of an unladen European swallow?',
            'answer' => 'What do you mean? An African or European swallow?',
            'category_id' => 2,
        ]);
        Faq::create([
            'question' => 'What is the airspeed velocity of an unladen African swallow?',
            'answer' => 'What do you mean? An African or European swallow?',
            'category_id' => 2,
        ]);
        Faq::create([
            'question' => 'What is the airspeed velocity of an unladen swallow?',
            'answer' => 'What do you mean? An African or European swallow?',
            'category_id' => 2,
        ]);


    }
}
