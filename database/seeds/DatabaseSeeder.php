<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
        $this->call(bannerSeeder::class);
        $this->call(feedbackSeeder::class);
        $this->call(instagramSeeder::class);
        $this->call(eventSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(userSeeder::class);
        $this->call(serviceSeeder::class);
        $this->call(categorySeeder::class);

        factory(Gallery::class, 50)->create();

    }
}
