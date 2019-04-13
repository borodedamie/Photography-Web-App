<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class instagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-1.jpg'
        ]);

        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-2.jpg'
        ]);

        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-3.jpg'
        ]);

        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-4.jpg'
        ]);

        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-5.jpg'
        ]);

        DB::table('instagrams')->insert([
            'image' => 'instagram/ins-6.jpg'
        ]);
    }
}
