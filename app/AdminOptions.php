<?php

/*
 * ##### Tabla Admin Options
 * Aqui estan todos las opciones que va a tener el administrador, se describen a continuacion:
 *      1. id_options
 *              1-> Menu
 *                    Sus valores son title, name, url, target
 * */

namespace App;

use Illuminate\Database\Eloquent\Model;


class AdminOptions extends Model
{
    protected $table = "admin_options";
    protected $fillable = ['id_option','type','value','created_at','updated_at'];
    protected $separator;
    protected $menuOptions;
    protected $idPage;
    protected $options;


    public function getMenuAdmin()
    {
       $menuOptions = AdminOptions::where("id_option",1)->get();
        //Leemos cada registro y separamos en variables los valores del JSON
        foreach ($menuOptions as $options) {
                $value = json_decode($options->value, true);
                $options->name = $value['name'];
                $options->target = $value['target'];
                $options->title = $value['title'];
                $options->url = $value['url'];
        }
       //Regresamos el objeto completo
        return $menuOptions;
    }
    public function getIdPages($params)
    {
        $menuOptions = AdminOptions::where("id_option",1)->get();
        //Leemos cada registro y separamos en variables los valores del JSON
        foreach ($menuOptions as $options)
        {
            $value = json_decode($options->value, true);
            $options->id_page = $value['id_page'];
            $options->params = $value['params'];
            if ($options->params == $params)
            {
                $idPage = $options->id_page;
                return $idPage;
            }
        }
    }

}
