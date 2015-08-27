<?php

use Illuminate\Database\Seeder;

class AdminOptionsTableSeeder extends Seeder
{
    public function run()
    {
        $id = DB::table('admin_options')->insertGetId([
            'id_option' => '2',
            'type' => 'pages',
            'value' => '{"title": "Administrar Landing","description": "Este es el modulo para editar las landing pages de la web"}',
        ]);
        DB::table('admin_options')->insert([
            'id_option' => '1',
            'type' => 'menu',
            'value' => '{"title": "Gestiona las landing","name": "Landing","url": "landing","target": "_self" , "params":"landing", "id_page": "'.$id.'"}',
        ]);
        $id = DB::table('admin_options')->insertGetId([
            'id_option' => '2',
            'type' => 'pages',
            'value' => '{"title": "Administrar Blog","description": "Este es el modulo para editar el blog"}',
        ]);
        DB::table('admin_options')->insert([
            'id_option' => '1',
            'type' => 'menu',
            'value' => '{"title": "Gestiona el blog","name": "Blog","url": "admin/blog","target": "_self","params":"blog","id_page": "'.$id.'"}',
        ]);
    }
}
