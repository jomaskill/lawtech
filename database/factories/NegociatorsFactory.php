<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Negotiators;
use Faker\Generator as Faker;

$factory->define(Negotiators::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'document' => rand(11111111111, 99999999999),
        'sex' => rand(0,1) == 1 ? 'M' : 'F'
    ];
});
