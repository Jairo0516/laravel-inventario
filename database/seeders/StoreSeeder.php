<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Store')->insert([
            'id' => Str::random(50),
            'name' => Str::random(15),
            'opening_date' => '2015-12-31 00:00:00'
        ]);
        DB::table('Store')->insert([
            'id' => Str::random(50),
            'name' => Str::random(15),
            'opening_date' => '2016-12-31 00:00:00'
        ]);
    }
}
