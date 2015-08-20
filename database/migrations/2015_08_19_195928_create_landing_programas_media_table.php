<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingProgramasMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_programas_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('programa_id')->unsigned();
            $table->string('nombre');
            $table->string('url');
            $table->string('height');
            $table->string('width');
            $table->string('type');
            //Creamos la relacion entre la tabla landing_universidad_email y landing_university, si devuelve el proceso, ya no la agrega sino que la elimina
            $table->foreign('programa_id')
                ->references('id')
                ->on('landing_programas')
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
        Schema::drop('landing_programas_medias');
    }
}
