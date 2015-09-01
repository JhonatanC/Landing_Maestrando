<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestAdminOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maest_admin_options', function (Blueprint $table) {
            $table->increments('id');
            //Id de las opciones disponibles -> 1 = Menu
            $table->integer('id_option')->unsigned();
            $table->string('type');
            $table->json('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maest_admin_options');
    }
}
