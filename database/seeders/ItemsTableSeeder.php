<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['id' => 1, 'name' => 'Laptop', 'price' => 599.99, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Biogesic', 'price' => 799.99, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Notebook', 'price' => 25.00, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Hotdog', 'price' => 15.00, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Shirt', 'price' => 39.99, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
