<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'mobile apps'],
            ['name' => 'website Design'],
            ['name' => 'ui/kit'],
            ['name' => 'Landing page'],
        ];

        Category::insert($categories);
    }
}
