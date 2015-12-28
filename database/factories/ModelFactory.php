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

$factory->define(App\Publicacion::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->sentence($nbWords = 4),
        'descripcion_corta' => $faker->sentence($nbWords = 6),
        'descripcion_larga' => $faker->sentence($nbWords = 20),
    ];
});

$factory->define(App\Visita::class, function (Faker\Generator $faker) {
    return [
        'fechahora' => $faker->dateTime($max = 'now'),
        'ip' => $faker->ipv4(),
        'publicaciones_id' => $faker->numberBetween($min = 1, $max = 51),
    ];
});
