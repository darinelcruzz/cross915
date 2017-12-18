<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description' => 'Memresía para estudiantes',
        'code' => 'PL125',
        'family' => 'blusa',
        'provider' => 'Nike',
        'unisize' => 10,
        'public' => 200,
        'price' => 350,
        'status' => 1,
    ];
});
