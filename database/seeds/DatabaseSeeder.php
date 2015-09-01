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
        factory('App\Admin\Entities\MaestUniversity',  10)->create();
        factory('Landing\Entities\MaestLanding',  50)->create();
        factory('App\Admin\Entities\MaestUniversityEmail', 30)->create();
        $this->call(AdminTableSeeder::class);
        $this->call(AdminOptionsTableSeeder::class);

        Model::reguard();
    }
}
