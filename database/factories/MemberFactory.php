<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name('female'),
        'gender' => 'F',
        'bload' => 'O+',
        'birthdate' => $faker->date,
        'email' => $faker->safeEmail,
    ];
});
