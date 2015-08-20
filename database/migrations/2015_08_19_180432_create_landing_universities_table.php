<?php

use Landing\Entities;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('color_universidad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('email')->nullable();
            $table->string('redes_sociales')->nullable();
            $table->string('url_img_logo')->nullable();
            $table->string('url_img_logo_th')->nullable();
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
        Schema::drop('landing_universities');
    }
}
