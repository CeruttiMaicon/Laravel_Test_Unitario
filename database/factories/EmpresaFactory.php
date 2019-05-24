<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'nome_empresa' => $faker->name,
        'email' => $faker->email,
        'endereco' => $faker->name,
    ];
});
