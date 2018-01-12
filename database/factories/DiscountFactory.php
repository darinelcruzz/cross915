<?php

use Faker\Generator as Faker;

$factory->define(App\Discount::class, function (Faker $faker) {
    return [
        'name' => 'Cuempleaños',
        'description' => 'Mes de cuampleaños',
        'type' => 1,
        'amount' => 50,
        'status' => 1,
    ];
});
