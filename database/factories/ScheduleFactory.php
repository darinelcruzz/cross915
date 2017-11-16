<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'hour' => $faker->time('H') . ":00",
        'members' => $faker->randomDigit,
        'monday' => $faker->randomDigit,
        'tuesday' => $faker->randomDigit,
        'wednesday' => $faker->randomDigit,
        'thursday' => $faker->randomDigit,
        'friday' => $faker->randomDigit,
        'saturday' => $faker->randomDigit,
        'sunday' => $faker->randomDigit,
    ];
});
