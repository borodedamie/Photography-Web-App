<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ope Oluborode',
            'role_id' => 1,
            'address' => '1, Abimbola Aboila Close',
            'phone_number' => '+2348135019640',
            'email' => 'opeoluborode@yahoo.com',  
            'password' => app('hash')->make('admin'),
        ]);
    }
}
