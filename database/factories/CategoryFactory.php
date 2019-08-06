<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'name'          => $faker->word,
        'slug'          => str_random(25),
        'description'    => $faker->paragraph(random_int(3, 5)),
    ];
});
