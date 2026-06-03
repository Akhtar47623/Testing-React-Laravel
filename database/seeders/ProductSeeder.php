<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "img" => "img1",
                "brand" => "Apple",
                "title" => "Iphone",
                "rating" => 4.4,
                "reviews" => 3,
                "sellPrice" => 550.00,
                "orders" => "0",
                "mrp" => "any",
                "discount" => 55,
                "category" => "Mobile",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "img" => "img2",
                "brand" => "Apple",
                "title" => "Iphone",
                "rating" => 4.4,
                "reviews" => 3,
                "sellPrice" => 550.00,
                "orders" => "1",
                "mrp" => "any",
                "discount" => 55,
                "category" => "Mobile",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
