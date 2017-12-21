<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $types = ['unisize', 'sizes'];
    $price = $faker->randomFloat(2, 100, 500);

    return [
        'description' => $faker->company,
        'code' => 'PL125',
        'type' => $faker->randomElement($types),
        'family' => 'blusa',
        'provider' => 'Nike',
        'unisize' => 10,
        'public' => $price + 20,
        'price' => $price,
        'status' => 1,
    ];
});
