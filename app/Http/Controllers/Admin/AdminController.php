<?php
/*
 * Este controlador se encarga de interpretar las diferentes opciones que tiene el administrador y enviarlos a sus controladores individuales
        El metodo resolveController, es el encargado de detectar el parametro y llamar al controlador indicado.
    El metodo index, es el encargado de cargar todas las opciones del administrador
 * */

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;

use App\AdminOptions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers;
use App\Http\Controllers\Admin;


class AdminController extends Controller
{
    private $menuAdmin;

    public function __construct(AdminOptions $adminOptions)
    {
        //Cargamos las Opciones del Administrador
        $this->adminOptions = $adminOptions;
        //Cargamos el menu
        $this->menuAdmin = $this->adminOptions->getMenuAdmin();

    }

    public function index()
    {
        //$menuAdmin = $this->menuAdmin;
        $this->obtenerMenu();
        return view('admin.layout', compact('menuAdmin'));
    }

    /*public function obtenerMenu()
    {
        $this->$menuOpt = \App\AdminOptions;
        $this->$menuOpt->getMenuAdmin();
        //return $menuOpt;
    }*/

}
