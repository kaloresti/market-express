<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => str_random(150),
        'price' => 500,
        'code' => str_random(10)
    ];
});
