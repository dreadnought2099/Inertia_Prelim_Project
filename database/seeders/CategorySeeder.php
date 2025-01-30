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
    public function run(): void
    {
        $categories = [
            ['name' => 'Canned Goods', 'description' => 'Various canned food items'],
            ['name' => 'Dairy Products', 'description' => 'Milk, cheese, and other dairy products'],
            ['name' => 'Noodles', 'description' => 'Different types of noodles and pasta'],
            ['name' => 'Frozen Foods', 'description' => 'Frozen meats and ingredients'],
            ['name' => 'Beverages', 'description' => 'Drinks including sodas, juices, and water'],
            ['name' => 'Alcohol', 'description' => 'Alcoholic beverages'],
            ['name' => 'Snacks', 'description' => 'Chips, cookies, and other snack items'],
            ['name' => 'Cleaning Products', 'description' => 'Household cleaning supplies'],
            ['name' => 'Office Supplies', 'description' => 'Stationery and office essentials'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
