<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'wedding'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'birthday'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'photoshoot'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'naming'
        ]);
        
    }
}
