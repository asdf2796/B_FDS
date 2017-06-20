<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Product::class, function (Faker\Generator $faker) {
	$types = ['Makanan','Minuman','Snack'];

    return [
        'name' => $faker->unique()->word,
        'type' => $types[array_rand($types,1)],
        'qty' => random_int(1, 50),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 100),
        'description' => $faker->text($maxNbChars = random_int(100, 200)),
    ];
});
