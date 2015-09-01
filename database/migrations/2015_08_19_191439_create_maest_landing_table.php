<?php

use Landing\Entities;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestLandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maest_landing', function (Blueprint $table) {
            $table->increments('id');
            //Creamos la llave foreana con la tabla landing_university
            $table->integer('maest_university_id')->unsigned();
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
            $table->integer('estado')->default(1);

            //Creamos la relacion entre la tabla landing_program y landing_university, si devuelve el proceso, ya no la agrega sino que la elimina
            $table->foreign('maest_university_id')
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
        Schema::drop('maest_landing');
    }
}
