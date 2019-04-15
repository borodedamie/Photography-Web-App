<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_id' => 1,
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'role_id' => 2,
            'name' => 'Photographer'
        ]);

        DB::table('roles')->insert([
            'role_id' => 3,
            'name' => 'Users'
        ]);
    }
}
