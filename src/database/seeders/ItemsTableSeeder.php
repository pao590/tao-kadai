<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['content' => '商品A'],
            ['content' => '商品B'],
            ['content' => '商品C'],
        ]);
    }
}
