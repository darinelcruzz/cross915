<?php

use Faker\Generator as Faker;

$factory->define(App\Coach::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'gender' => 'M',
        'birthdate' => $faker->date,
        'username' => $faker->userName,
    ];
});
