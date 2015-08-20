<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('landing_users')->insert(array (
        'name' => 'Juan Soto',
        'email' => 'juksoto@gmail.com',
        'password' => Hash::make('medios'),
        'role' => 'admin'
       ));
    }
}