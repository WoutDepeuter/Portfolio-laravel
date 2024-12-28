<?php

namespace Database\Seeders;

use App\Models\FaqCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FaqCategory::create(['name' => 'General']);
        FaqCategory::create(['name' => 'kwni']);
        FaqCategory::create(['name' => 'random']);

        dd(FaqCategory::all());
    }

}
