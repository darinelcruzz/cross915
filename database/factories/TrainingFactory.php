<?php

use Faker\Generator as Faker;

$factory->define(App\Training::class, function (Faker $faker) {
    return [
        'coach_id' => 0,
        'workout_id' => 0,
        'extra1' => 0,
        'extra2' => 0,
        'color' => 'danger'
    ];
});
