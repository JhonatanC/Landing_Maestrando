<?php

use Landing\Entities;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_programs', function (Blueprint $table) {
            $table->increments('id');
            //Creamos la llave foreana con la tabla landing_university
            $table->integer('universidad_id')->unsigned();
            $table->string('nombre_programa');
            $table->enum('tipo_formacion',['Doctorado','Maestría y/o Especializacion','Diplomado','Seminario','Curso']);
            $table->string('ciudad');
            $table->string('pais');
            $table->string('modalidad');
            $table->string('duracion')->nullable();
            $table->text('contenido_html');
            $table->text('descripcion_corta');
            $table->date('inicio_programa')->nullable();
            $table->date('cierre_matricula')->nullable();
            $table->string('url_img_encabezado')->nullable();
            //Color del programa, por defecto el color de maestrando
            $table->string('color_programa')->default("#E84343");
            $table->string('asunto_email');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('observaciones');
            $table->dateTime('inicio_publicacion');
            $table->dateTime('fin_publicacion');

            //Creamos la relacion entre la tabla landing_program y landing_university, si devuelve el proceso, ya no la agrega sino que la elimina
            $table->foreign('universidad_id')
                ->references('id')
                ->on('landing_universities')
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
        Schema::drop('landing_programs');
    }
}
