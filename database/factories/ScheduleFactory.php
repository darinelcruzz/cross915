<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'hour' => $faker->time('H') . ":00",
        'members' => 0,
        'monday' => 0,
        'tuesday' => 0,
        'wednesday' => 0,
        'thursday' => 0,
        'friday' => 0,
        'saturday' => 0,
        'sunday' => 0,
    ];
});
