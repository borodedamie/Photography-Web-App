<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'company_name' => 'Nature Photoshoot',
            'description' => 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.',
            'address' => 'Abimbola Abiola Close',
            'city' => 'Sangotedo, Lekki Lagos',
            'phone_number' => '+2348135019640',
            'email' => 'opeoluborode@yahoo,com',
            'opening_closing_time' => 'Mon to Fri 9am to 6 pm'
        ]);
    }
}
