<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Store::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'register' => $faker->randomNumber,
        'company_name' => $faker->name,
        'description' => $faker->sentence,
        'prefix' => $faker->name,
        'slug' => $faker->slug,
        'address' => $faker->address,
        'number' => $faker->randomNumber,
        'complement' => $faker->name,
        'district' => $faker->name,
        'state' => $faker->name,
        'contact' => $faker->name,
        'phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'delivery_fee' => $faker->randomFloat(2, 1, 5)
    ];
});
