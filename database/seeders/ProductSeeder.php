<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([[
            'product_name' => "Delicious Pizza",
            'product_desc' => "Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque",
            'product_price' => 20,
            'category_id' => 1,
            'product_image' => '../assets2/images/f1.png'
        ],
        [
            'product_name' => "Delicious Burger",
            'product_desc' => "Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque",
            'product_price' => 20,
            'category_id' => 2,
            'product_image' => '../assets2/images/f2.png'
        ],
        [
            'product_name' => "Delicious Pasta",
            'product_desc' => "Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque",
            'product_price' => 20,
            'category_id' => 3,
            'product_image' => '../assets2/images/f4.png'
        ],
        [
            'product_name' => "Delicious Fries",
            'product_desc' => "Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque",
            'product_price' => 20,
            'category_id' => 4,
            'product_image' => '../assets2/images/f5.png'
        ]
    ]);
    }
}
