<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Technology', 'category_description' => 'Latest gadgets and software.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'category_name' => 'Health', 'category_description' => 'Tips and products for a healthy life.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'category_name' => 'Education', 'category_description' => 'Resources for students and teachers.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'category_name' => 'Food', 'category_description' => 'Foodstuffs.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'category_name' => 'Fashion', 'category_description' => 'Clothes and stuff.', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
