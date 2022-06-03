<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('pagina.home',);
    }

    public function ventajas(){
        return view('ventajas',);
    }

    public function desventajas(){
        return view('desventajas',);
    }


}
