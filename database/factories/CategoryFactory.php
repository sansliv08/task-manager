<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        // (1) uma palavra para categorias não muito longas
        'name' => $faker->sentence(1),
    ];
});
