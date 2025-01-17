<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\User;
use App\Models\News;
use App\Models\ForumPost;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeding Users
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => bcrypt('Password!321'), // Make sure to hash the password
            'role' => 'admin',
        ]);

        // Seeding FAQ Categories
        FaqCategory::create(['name' => 'General']);
        FaqCategory::create(['name' => 'Technical']);
        FaqCategory::create(['name' => 'Account']);
        FaqCategory::create(['name' => 'Other']);

        // Seeding FAQs
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

        // Seeding News
        News::create([
            'title' => 'New Feature Release',
            'image_path' => 'news1.jpg',
            'content' => 'We are excited to announce the release of our new feature!',
            'published_at' => now(),
        ]);
        News::create([
            'title' => 'Maintenance Update',
            'image_path' => 'news2.jpg',
            'content' => 'Scheduled maintenance will occur on Sunday, 2 AM to 4 AM.',
            'published_at' => now(),
        ]);

        // Seeding Forum Posts
        ForumPost::create([
            'user_id' => 1,
            'title' => 'Welcome to the Forum!',
            'content' => 'Feel free to discuss anything here.',
        ]);
        ForumPost::create([
            'user_id' => 1,
            'title' => 'New Updates',
            'content' => 'Check out the latest updates in our system.',
        ]);

        // Seeding Comments
        Comment::create([
            'user_id' => 1,
            'forum_post_id' => 1,
            'content' => 'Thank you for joining the forum!',
        ]);
        Comment::create([
            'user_id' => 1,
            'forum_post_id' => 2,
            'content' => 'The updates are fantastic!',
        ]);
    }
}
