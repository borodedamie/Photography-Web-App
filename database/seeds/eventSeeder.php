<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'event_title' => 'Spreading Peace to the world',
            'event_image' => 'h-blog-1.jpg',
            'event_description' => 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.'
        ]);

        DB::table('events')->insert([
            'event_title' => 'Spreading Peace to the world',
            'event_image' => 'h-blog-2.jpg',
            'event_description' => 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.'
        ]);

        DB::table('events')->insert([
            'event_title' => 'Spreading Peace to the world',
            'event_image' => 'h-blog-3.jpg',
            'event_description' => 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.'
        ]);

        DB::table('events')->insert([
            'event_title' => 'Spreading Peace to the world',
            'event_image' => 'h-blog-4.jpg',
            'event_description' => 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.'
        ]);
    }
}
