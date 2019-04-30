<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

// use App\Model;
use App\Gallery;
use App\Category;
use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {

    $category_id = Category::all()->random();
    
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => $faker->image('public/storage/images', 640, 480),
        'category_id' => $category_id
    ];
});
