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

$factory->define(App\Individual::class, function (Faker\Generator $faker) {

    return [
        'credit_id' => $faker->randomElement($array = array (1,2,3,4,5,6)),
        'reference_id' => $faker->randomElement($array = array (1,2,3)),
        'category_id' => $faker->randomElement($array = array (1,2,3)),
        'nombre_uno' => $faker->firstNameMale,
        'nombre_dos' => $faker->firstNameMale,
        'apellido_uno' => $faker->lastName,
        'apellido_dos' => $faker->lastName,
        'apellido_casada' => $faker->lastName,
        'identificacion' => $faker->numerify('####-######-####'),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'genero' => $faker->randomElement($array = array (1,2)),
        'telefono_contacto' => $faker->numerify('####-#####'),
        'telefono_domicilio' => $faker->numerify('####-#####'),
        'casa_propia' => $faker->randomElement($array = array (0,1)),
        'inicio_renta' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'renta' => 2800,
        'telefono_arrendante' => $faker->numerify('####-#####'),
        'celular_arrendante' => $faker->numerify('####-#####'),
        'latitud' => $faker->latitude($min = -90, $max = 90),
        'longitud' => $faker->longitude($min = -180, $max = 180),
        'domicilio'=> $faker->streetAddress,
        'nit' => $faker->numerify('########-#'),
        'profesion' => 'Profesion XXX',
        'egresado' => $faker->state,
        'email' => $faker->email,
        'facebook' => 'facebook/' . $faker->userName,
        'instagram' => 'instagram/' . $faker->userName
    ];
});
