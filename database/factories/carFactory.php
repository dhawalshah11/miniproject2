<?php

use Faker\Generator as Faker;

$factory->define(\App\car::class, function (Faker $faker) {
    return [
        'year'=> $faker->year('2018'),
        'model'=> $faker->name(),
        'make'=> $faker->randomElement($array = array('Honda', 'Toyota', 'Ford')),
    ];
});