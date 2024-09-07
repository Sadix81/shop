<?php

namespace Database\Seeders\Product;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'test-1',
                'status' => 1,
                'price' => 25000,
                'details' => 'test-1-detailes',
                'color' => 'black',
                // 'image' => 'test-1',
                'is_sale' => 1,
                'discount' => 15000,
                'count' => '123',
            ],
            [
                'name' => 'test-2',
                'status' => 1,
                'price' => 50000,
                'details' => 'test-2-detailes',
                'color' => 'white',
                // 'image' => 'test-1',
                'is_sale' => 0,
                'discount' => '0',
                'count' => '123456',
            ],
            [
                'name' => 'test-3',
                'status' => 1,
                'price' => 70000,
                'details' => 'test-3-detailes',
                'color' => 'red',
                // 'image' => 'test-1',
                'is_sale' => 1,
                'discount' => 20000,
                'count' => '123456789',
            ]
        ];
        foreach ($products as $product) {
            if ($product['is_sale'] && $product['discount'] > 0) {
                $final_price = $product['price'] - $product['discount'];
                $final_price = max(0, $final_price);
            } else {
                $final_price = $product['price'];
            }
            $product['price'] = $final_price;

            $final_price = max(0, $final_price);
            $product['price'] = $final_price;

            Product::firstOrCreate(
                ['name' => $product['name']], // Unique identifier
                $product // Other attributes to create
            );
        }
    }
}
