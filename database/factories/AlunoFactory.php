<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aluno;
use Faker\Generator as Faker;

$factory->define(Aluno::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'email' => $faker->unique()->safeEmail,
        'sex' => 'M',
        'birthdate' => $faker->date()
    ];
});
