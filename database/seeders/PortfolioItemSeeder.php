<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioItem;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PortfolioItem::factory()->count(4)->create([
            'title' => 'Ecommerce Product Apps',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text',
            'category_id' => 1,
        ]);
        
        PortfolioItem::factory()->count(4)->create([
            'title' => 'Cryptocurrency web Application',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text',
            'category_id' => 2,
        ]);

        PortfolioItem::factory()->count(4)->create([
            'title' => 'Making 3d Illustration',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text',
            'category_id' => 3,
        ]);

        PortfolioItem::factory()->count(4)->create([
            'title' => 'Hilon - Personal Portfolio',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text',
            'category_id' => 4,
        ]);
    }
}
