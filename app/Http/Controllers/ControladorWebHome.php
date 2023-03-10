<?php

namespace App\Http\Controllers;

use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;

class ControladorWebHome extends Controller
{
    public function index()
    {
            $pg = "index";
            return view("web.index", compact('pg'));
    }
}
