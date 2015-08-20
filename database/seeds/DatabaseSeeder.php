<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory('App\LandingUniversidad', 'landing_universidad', 10)->create();
        factory('App\LandingPrograma', 'landing_programa', 50)->create();
        factory('App\LandingUniversidadEmail', 'landing_universidad_email', 30)->create();
        $this->call(AdminTableSeeder::class);

        Model::reguard();
    }
}
