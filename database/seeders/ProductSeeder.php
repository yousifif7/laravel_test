<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'img' => '/build/assets/pic1-CUWrPPnw.jpg',
                'brand' => 'Adidas',
                'title' => 'Adidas Ultraboost Running Shoes',
                'rating' => 4.5,
                'reviews' => 128,
                'sellPrice' => 8999.00,
                'orders' => '450',
                'mrp' => '12999',
                'discount' => 31,
                'category' => 'men',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => '/build/assets/pic2-gHpUF_wS.jpg',
                'brand' => 'Puma',
                'title' => 'Puma Softride Enzo Women Sneakers',
                'rating' => 4.2,
                'reviews' => 96,
                'sellPrice' => 5499.00,
                'orders' => '320',
                'mrp' => '7999',
                'discount' => 31,
                'category' => 'women',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
