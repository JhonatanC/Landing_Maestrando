<?php

use Illuminate\Database\Seeder;

class AdminOptionMenusTableSeeder extends Seeder{
    public function run()
    {
        DB::table('admin_option_menus')->insert(array (
            'name' => 'Landing',
            'title' => 'Manager Landing Maestrando',
        ));
    }
}