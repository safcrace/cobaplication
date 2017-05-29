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
        'credit_id' => $faker->randomElement($array = array (1,2,3)),
        'reference_id' => $faker->randomElement($array = array (1,2,3)),
        'nombres' => $faker->firstNameMale,
        'apellidos' => $faker->lastName,
        'identificacion' => $faker->numerify('####-######-##'),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'domicilio'=> $faker->address,
        'telefonos' => $faker->numerify('####-#####, ####-#####'),
        'foto' => $faker->imageUrl($width = 640, $height = 480),
        'foto_dpi' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => $faker->randomElement($array = array ('1','2','3')),
    ];
});
