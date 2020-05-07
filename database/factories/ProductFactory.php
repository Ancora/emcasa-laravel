<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'code' => $faker->randomNumber(6),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'body' => $faker->paragraph(5),
        'slug' => $faker->slug,
        'price' => $faker->randomFloat(2, 1, 8),
        'discount' => $faker->randomFloat(2, 1, 8),
        'discount_percentage' => $faker->randomFloat(2, 1, 5),
        'quantity' => $faker->randomNumber
    ];
});
