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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/


$factory->define(App\Entities\Apoderado::class, function (Faker\Generator $faker) {
    return [
        'dni' =>rand (10000000 ,90000000 ),
        'nombre_apoderado' => $faker->name,
        'apellido_apoderado' => $faker->lastName,
        'parentesco' => $faker->randomElement(['Madre','Padre','Tio']),
        'correo_electronico' =>$faker->email,
        'telefono' => $faker->phoneNumber,
        'celular' =>$faker->phoneNumber,
        'telefono_oficina' => $faker->phoneNumber,
        'Direccion' =>$faker->address,
        'ubigeo' => str_random(10),
        'autorizacion' => $faker->randomElement([0,1]),
        'Vive' => $faker->address,
        'nivelEducativo' =>  $faker->randomElement(['Sin estudios','Educacion  Primaria','Educacion Secundaria','Educacion Tecnica','Educacion Superior']),
        'ocupacion' => $faker->randomElement(['Ingeniero','Abogado','Profesor']),
        'estado' => $faker->randomElement([0,1]),

    ];
});
$factory->define(App\Entities\persona::class, function (Faker\Generator $faker) {
    return [
        'fecha_nacimiento' =>'05/12/1989',
        'lugar_nacimiento' =>'IQUITOS',
        'Nacionalidad' => 'PERUANA',
        'Direccion' =>$faker->address,
        'Telefono' =>$faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'correo_electronico' =>$faker->email,
        'hijos' => $faker->randomElement([0,5]),
        'Hijos_institucion' =>$faker->randomElement([0,5]),
        'estadoCivil' => $faker->randomElement(['S','C','D','V']),
        'grupoSanguineo' => $faker->randomElement(['O+','O-']),
    ];
});
$factory->define(App\Entities\Alumno::class, function (Faker\Generator $faker) {
    return [
        'codigo_alumno' =>rand (1000000000 ,9000000000 ),
        'nombre' => $faker->name,
        'apellido_completo' => $faker->lastName,
        'tipDocumento' => $faker->randomElement(['01','02','03']),
        'numero_doc' =>rand (10000000 ,90000000 ),
        'estado' => $faker->randomElement([0,1]),
        'persona_id' =>$faker->randomElement([1,2,3,4,5]),


    ];
});
