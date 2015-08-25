<?php

namespace App\Http\Controllers;

use App\AdminOptionMenu;

class AdminController extends Controller
{
    public function getIndex()
    {
       // $title = "Adminstrador Maestrando" ;
       $options = AdminOptionMenu::where('id',1) -> get();
     // $options =  AdminOptionMenu::all();
        //$menu_options =   App\AdminOptionMenu::all();
      //  dd($menu_options->name);
         dd($options->name);
     return view('admin.layout', compact('options'));
    }

}
