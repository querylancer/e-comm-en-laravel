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
            'name' => 'LG mobile',
            'price' => '100',
            'description' => 'A smartphone with 4G',
            'category' => 'mobile',
            'gallery' => 'https://www.lg.com/id/images/mobile/md05907276/gallery/N01_V30_Black_20171208_Desktop01.jpg',
        ]);
    }
}
