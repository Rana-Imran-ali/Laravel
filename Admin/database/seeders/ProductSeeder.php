<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Smartphone X',
            'description' => 'Latest model with high-res camera.',
            'price' => 999.99,
            'stock' => 50,
            'category_id' => 1,
            'slug' => 'smartphone-x',
            'image' => 'products/smartphone.jpg',
        ]);

        Product::create([
            'title' => 'Designer T-Shirt',
            'description' => 'Comfortable cotton t-shirt.',
            'price' => 29.99,
            'stock' => 100,
            'category_id' => 2,
            'slug' => 'designer-t-shirt',
            'image' => 'products/tshirt.jpg',
        ]);
    }
}
