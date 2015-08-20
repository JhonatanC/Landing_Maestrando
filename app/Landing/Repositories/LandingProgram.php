<?php
/*
 * Esta clase es para incluir el codigo de las consultas que hagamos a la BD
 * */
namespace Landing\Repositories;

use Illuminate\Database\Eloquent\Model;

class LandingProgram extends Model
{
    public $table = "landing_programs";
    public static  function programasPaginate() {

    }
}