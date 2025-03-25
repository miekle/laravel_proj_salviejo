<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder {
    public function run(): void {
        $categories = ['Electronics', 'Clothing', 'Books', 'Furniture', 'Sports'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
