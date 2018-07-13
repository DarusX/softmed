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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\medicamento::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'compuesto' => $faker->name,
        'presentacion' => $faker->name,
    ];
});

$factory->define(App\estudio::class, function (Faker\Generator $faker) {
    return [
        'estudio' => $faker->name,
    ];
});

$factory->define(App\enfermedad::class, function (Faker\Generator $faker) {
    return [
        'enfermedad' => $faker->name,
    ];
});

$factory->define(App\paciente::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'paterno' => $faker->name,
        'materno' => $faker->name,
        'nacimiento' => $faker->date,
        'curp' => $faker->word,
        'domicilio' => $faker->address,
    ];
});