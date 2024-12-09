<?php

namespace Database\Seeders\Category;

use App\Models\Category\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        for($i = 0 ; $i < 4 ; $i++){
            Category::create([
                'title' => 'test-' . $i
            ]);
        }
    }
}
