<?php

use Faker\Generator as Faker;

$factory->define(App\Membership::class, function (Faker $faker) {
    return [
        'name' => 'Estudiante',
        'description' => 'Memresía para estudiantes',
        'type' => 'meses',
        'amount' => 550,
        'status' => 1,
    ];
});
