<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //definimos que datos se van a ingresar a nuestra BD y que tipo 
        'name' => $this->faker->word
    ];
});
