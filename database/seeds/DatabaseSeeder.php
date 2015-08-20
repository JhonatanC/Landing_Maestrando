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
        factory('Landing\Entities\LandingUniversity',  10)->create();
        factory('Landing\Entities\LandingProgram',  50)->create();
        factory('Landing\Entities\LandingUniversityEmail', 30)->create();
        $this->call(AdminTableSeeder::class);

        Model::reguard();
    }
}
