<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service_title' => 'Spreading Peace to world',
            'service_description' => 'If you are looking at blank cassettes on the web, you may be very confused at the difference.',
            'service_image' => 'service-2.jpg'
        ]);

        DB::table('services')->insert([
            'service_title' => 'Spreading Peace to world',
            'service_description' => 'If you are looking at blank cassettes on the web, you may be very confused at the difference.',
            'service_image' => 'service-3.jpg'
        ]);

        DB::table('services')->insert([
            'service_title' => 'Spreading Peace to world',
            'service_description' => 'If you are looking at blank cassettes on the web, you may be very confused at the difference.',
            'service_image' => 'service-4.jpg'
        ]);

    }
}
