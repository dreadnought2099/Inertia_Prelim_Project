<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Canned Tuna', 'category_id' => 1, 'wholesale_price' => 2.49, 'retail_price' => 2.99, 'description' => 'High-quality canned tuna in olive oil'],
            ['name' => 'Cheddar Cheese', 'category_id' => 2, 'wholesale_price' => 4.99, 'retail_price' => 5.49, 'description' => 'Aged cheddar cheese with a rich flavor'],
            ['name' => 'Instant Noodles', 'category_id' => 3, 'wholesale_price' => 0.99, 'retail_price' => 1.29, 'description' => 'Quick and easy instant noodles'],
            ['name' => 'Frozen Chicken Wings', 'category_id' => 4, 'wholesale_price' => 7.99, 'retail_price' => 8.99, 'description' => 'Frozen chicken wings, ready to cook'],
            ['name' => 'Orange Juice', 'category_id' => 5, 'wholesale_price' => 3.49, 'retail_price' => 3.99, 'description' => 'Freshly squeezed orange juice'],
            ['name' => 'Red Wine', 'category_id' => 6, 'wholesale_price' => 11.99, 'retail_price' => 12.99, 'description' => 'Premium red wine from France'],
            ['name' => 'Potato Chips', 'category_id' => 7, 'wholesale_price' => 1.99, 'retail_price' => 2.49, 'description' => 'Crispy and delicious potato chips'],
            ['name' => 'Dishwashing Liquid', 'category_id' => 8, 'wholesale_price' => 4.49, 'retail_price' => 4.99, 'description' => 'Powerful grease-cutting dishwashing liquid'],
            ['name' => 'Ballpoint Pens', 'category_id' => 9, 'wholesale_price' => 1.49, 'retail_price' => 1.99, 'description' => 'Smooth-writing ballpoint pens'],
        ];
        

        foreach($products as $product) {
            Products::create($product);
        }
    }
}
