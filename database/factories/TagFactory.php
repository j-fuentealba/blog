<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {

    $title = $faker->unique()->word(5);

    return [

        //Estructura de la Tabla
        'name'	=> $title,
        'slug'	=> Str::slug($title),

    ];
});
