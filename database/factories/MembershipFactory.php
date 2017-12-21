<?php

use Faker\Generator as Faker;

$factory->define(App\Membership::class, function (Faker $faker) {
    return [
        'name' => 'Estudiante',
        'description' => 'Membresía para estudiantes',
        'visits' => 0,
        'months' => 1,
        'amount' => 550,
        'type' => 'm',
        'status' => 1,
    ];
});
