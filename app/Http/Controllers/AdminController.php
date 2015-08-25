<?php

namespace App\Http\Controllers;

use App\AdminOptionMenu;

class AdminController extends Controller
{
    public function getIndex()
    {
       // $title = "Adminstrador Maestrando" ;
       //$menu_options = App\AdminOptionMenu::all();
     // $options =  AdminOptionMenu::all();
        //$menu_options =   App\AdminOptionMenu::all();
      //  dd($menu_options->name);

     return view('admin.layout');
    }



}
