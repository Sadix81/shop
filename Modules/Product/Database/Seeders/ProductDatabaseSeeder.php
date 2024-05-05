<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use Modules\Gallery\Entities\Gallery;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\Product;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Faker::create();

        $categories = Category::pluck('id')->toArray();

        foreach ($categories as $categoryId) {
            for ($i = 0; $i < 5; $i++) {
                $product = Product::create([
                    'name' => $faker->word,
                    'status' => $faker->randomElement(['active', 'inactive']),
                    'count' => $faker->numberBetween(1, 100),
                    'price' => $faker->randomFloat(2, 10, 100),
                    'category_id' => $categoryId,
                    'image' => 'images/baner-right-image-02.jpg',
                ]);

                for ($j = 0; $j < 5; $j++) {
                    Gallery::create([
                        'file_path' => $faker->imageUrl(640, 480),
                        'product_id' => $product->id,
                    ]);
                }
            }
        }
    }
}
