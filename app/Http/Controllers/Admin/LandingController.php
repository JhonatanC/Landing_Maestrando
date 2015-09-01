<?php
/*
 * Este controlador se encarga de interpretar las diferentes opciones que tiene el administrador y enviarlos a sus controladores individuales
        El metodo resolveController, es el encargado de detectar el parametro y llamar al controlador indicado.
    El metodo index, es el encargado de cargar todas las opciones del administrador
 * */


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\AdminOptions;
use Landing\Repositories\MaestLanding as LandingRepo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin\Repositories\MaestUniversity;
use App\Admin\Entities\MaestUniversity as MaestUniversityEnt;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $menuAdmin;
    protected $controllerClassName;
    protected $url;

    public function __construct(AdminOptions $adminOptions, Request $request)
    {
        $this->adminOptions = $adminOptions;

        $this->request = $request;
        //Cargamos el menu, los detalles del encabezado de la pagina
        $this->menuAdmin = $this->adminOptions->getMenuAdmin();
        $this->details_page = $this->adminOptions->getDetailsPages("landing");
    }
    public function index()
    {
       //Guardamos los parametros del Menu de administrador
        $menuAdmin = $this->menuAdmin;
        //Incluimos todos los registros de la tabla, programas.
        $programs = LandingRepo::orderBy('updated_at', 'DESC')
            ->paginate(10);
        //A la coleccion de Por cada programa, agregamos los detalles de la universidad usando la llave foreana universidad_id
        $this->setUniversityDetails($programs);
        //Detalles de la pagina, titulo, descripcion y parametros
        $page = $this->details_page;
         return view('admin.landing.index', compact('menuAdmin','page','programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public static function setUniversityDetails($collection)
    {
        //Este metodo trae toda la informacion de la universidad de cada programa. Cada programa tiene una llave foreana (universidad_id), la cual uso para hacer la relacion.
        //El parametro es una coleccion, son todas los programas (registros) que hay en la base de datos.

        foreach ($collection as $item)
        {
            $value = $item->maest_university_id;
            $item->university_details = MaestUniversityEnt::find($value)->MaestLanding;

        }
    }


}





