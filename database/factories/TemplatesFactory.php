<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Templates;
use Faker\Generator as Faker;

$factory->define(Templates::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'archive_path' => $faker->file('/')
    ];
});
