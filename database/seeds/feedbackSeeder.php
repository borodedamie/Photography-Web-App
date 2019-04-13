<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert([
            'feedback' => '“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware”.',
            'name' => 'Mark Alviro Wiens',
            'job_title' => 'CEO at Google',
            'img' => 'testi-1.jpg'
        ]);

        DB::table('feedbacks')->insert([
            'feedback' => '“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware”.',
            'name' => 'Mark Alviro Wiens',
            'job_title' => 'CEO at Google',
            'img' => 'testi-1.jpg'
        ]);

        DB::table('feedbacks')->insert([
            'feedback' => '“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware”.',
            'name' => 'Mark Alviro Wiens',
            'job_title' => 'CEO at Google',
            'img' => 'testi-1.jpg'
        ]);
    }
}
