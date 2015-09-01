<?php

use Landing\Entities;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestUniversitiesEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maest_universities_email', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('universidad_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('cargo');
            //Creamos la relacion entre la tabla landing_universidad_email y landing_university, si devuelve el proceso, ya no la agrega sino que la elimina
            $table->foreign('universidad_id')
                ->references('id')
                ->on('maest_universities')
                ->onDelete('cascade');

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
        Schema::drop('maest_universities_email');
    }
}
