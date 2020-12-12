<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Projects;
use Faker\Generator as Faker;

$factory->define(Projects::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->word,
        'url' => $faker->word,
        'image_path' => $faker->word,
        'cover_path' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
