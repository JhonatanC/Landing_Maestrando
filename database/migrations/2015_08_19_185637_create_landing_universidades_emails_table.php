<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingUniversidadesEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_universidades_emails', function (Blueprint $table) {
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
                ->on('landing_universidades')
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
        Schema::drop('landing_universidades_emails');
    }
}
