<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Llamadas::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'ape_com' => strtoupper($faker->name),
        'nom_com' => strtoupper($faker->lastName),
        'movil' => $faker->numberBetween(900000000,999999999),
        'fijo' => $faker->numberBetween(900000000,999999999),
        'obs' => $faker->text(100),
        'id_cur' => rand(1,10),
        'otros_cur' => $faker->text(100),
        'fch_llamada' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'wasap' => $faker->randomElement(['0','1']),
        'id_est_llamada' => rand(1,4),
        'id_asesor' => rand(1,1),
        'prox_fch_llamada' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
