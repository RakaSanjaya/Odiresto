<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'cat_name' => 'Makanan',
                'description' => 'Main courses to satisfy your hunger',
            ],
            [
                'cat_name' => 'Minuman',
                'description' => 'Beverages to quench your thirst',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
