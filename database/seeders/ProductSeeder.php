<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product')->insert([
            'sku' => Str::random(50),
            'name' => Str::random(10),
            'description' => Str::random(20),
            'value' => 3500000,
            'store' => 1,
            'image' => "https://i.blogs.es/74c33b/captura-de-pantalla-2020-04-17-a-las-13.02.30/1366_2000.png",
        ]);
        DB::table('Product')->insert([
            'sku' => Str::random(50),
            'name' => Str::random(20),
            'description' => Str::random(10),
            'value' => 1500000,
            'store' => 1,
            'image' => "https://static.acer.com/up/Resource/Acer/Predator/Homepage/Featured_Products/20200609/Predator-Helios-700-PH717-71-preview.png",
        ]);
    }
}
