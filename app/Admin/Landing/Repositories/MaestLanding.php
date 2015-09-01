<?php
/*
 * Esta clase es para incluir el codigo de las consultas que hagamos a la BD
 * */
namespace Landing\Repositories;

use Illuminate\Database\Eloquent\Model;

class MaestLanding extends Model
{
    public $table = "maest_landing";
    protected $fillable = ['maest_university_id','nombre_programa','tipo_formacion','pais','modalidad','duracion','contenido_html','descripcion_corta','inicio_programa','cierre_matricula','url_img_encabezado','color_programa','asunto_email','meta_title','meta_description','observaciones','inicio_publicacion','fin_publicacion','created_at','updated_at'];


}
