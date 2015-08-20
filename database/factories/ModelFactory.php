<?php

use Landing\Entities\LandingUniversity as University;
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

/*
$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(Landing\Entities\LandingUniversity::class, function ($faker) {
    return [
        'nombre'            => $faker->company,
        'color_universidad' => $faker->hexcolor,
        'telefono'          => $faker->phoneNumber,
        'telefono2'         => $faker->phoneNumber,
        'email'             => $faker->companyEmail,
        'redes_sociales'    => $faker->userName,
        'url_img_logo'      => $faker->imageUrl($width = 640, $height = 480),
        'url_img_logo_th'   => $faker->imageUrl($width = 640, $height = 480)
    ];
});

$factory->define(Landing\Entities\LandingProgram::class,function ($faker) {
    $id = University::all()->lists('id')->toArray();
    return [
        'universidad_id'    => $faker->randomElement($id),
        'nombre_programa'   => $faker->sentence($nbWords = 6),
        'tipo_formacion'    => $faker-> randomElement($array = array ('Doctorado','Maestría y/o Especializacion','Diplomado','Seminario','Curso')),
        'ciudad'            => $faker->city,
        'pais'              => $faker->country,
        'modalidad'         => $faker-> randomElement($array = array ('Virtual','Presencial','Semipresencial')),
        'duracion'          => $faker->biasedNumberBetween($min = 1, $max = 36, $function = 'sqrt').' meses',
        'contenido_html'    => $faker->text($maxNbChars = 200),
        'descripcion_corta' => $faker->text($maxNbChars = 50),
        'inicio_programa'   => $faker->dateTime($max = 'now'),
        'cierre_matricula'  => $faker->dateTime($max = 'now'),
        'url_img_encabezado'=> $faker->imageUrl($width = 640, $height = 480),
        'color_programa'    => $faker->hexcolor,
        'asunto_email'      => $faker->sentence($nbWords = 4),
        'meta_title'        => $faker->sentence($nbWords = 8),
        'meta_description'  => $faker->text($maxNbChars = 50),
        'observaciones'     => $faker->text($maxNbChars = 150),
        'inicio_publicacion'=> $faker->dateTime($max = 'now'),
        'fin_publicacion'   => $faker->dateTime($max = 'now')
    ];
});

$factory->define(Landing\Entities\LandingUniversityEmail::class, function ($faker) {
    $id = University::all()->lists('id')->toArray();
    return [
        'universidad_id'     => $faker->randomElement($id),
        'nombre'             => $faker->name,
        'apellido'           => $faker-> lastName,
        'email'              => $faker->email,
        'telefono'           => $faker->phoneNumber,
        'cargo'              => $faker->catchPhrase
    ];
});
