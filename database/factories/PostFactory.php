<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'author'        => $faker->name,
        'title'         => str_random(15),
        'description'   => $faker->sentence,
        'content'       => $faker->paragraph(random_int(50, 60)),
        'category_id'   => $faker->numberBetween(1, 10)
    ];
});
