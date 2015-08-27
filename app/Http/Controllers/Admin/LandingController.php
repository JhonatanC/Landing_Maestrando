<?php
/*
 * Este controlador se encarga de interpretar las diferentes opciones que tiene el administrador y enviarlos a sus controladores individuales
        El metodo resolveController, es el encargado de detectar el parametro y llamar al controlador indicado.
    El metodo index, es el encargado de cargar todas las opciones del administrador
 * */

namespace App\Http\Controllers\Admin;

use App\AdminOptions;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;
use Illuminate\Routing\UrlGenerator;

class LandingController extends Controller
{
    private $menuAdmin;
    protected $controllerClassName;
    protected $url;

    public function __construct(AdminOptions $adminOptions, UrlGenerator $url)
    {
        //Cargamos las Opciones del Administrador
        $this->adminOptions = $adminOptions;
        //Cargamos el menu
        $this->menuAdmin = $this->adminOptions->getMenuAdmin();
        $this->url = $url;

    }

    public function index()
    {
        $menuAdmin = $this->menuAdmin;
        $this->getIdPage();

        return view('admin.landing.index', compact('menuAdmin'));
    }
    public function getIdPage()
    {
        dd($this->url->getRequest()
    );
        $params = " ";
        $this->adminOptions->getIdPages($params);
        return view('admin.landing.index', compact('menuAdmin'));
    }







}
