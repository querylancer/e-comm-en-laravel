<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Apple iPhone 12',
            'price' => '700',
            'description' => 'A smartphone with 4G',
            'category' => 'mobile',
            'gallery' => 'https://cdn.eraspace.com/pub/media/catalog/product/i/p/iphone_12_pro_silver_1_3.jpg',
        ]);
    }
}
