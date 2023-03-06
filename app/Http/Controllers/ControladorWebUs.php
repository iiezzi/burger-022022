<?php

namespace App\Http\Controllers;

use App\Entidades\Sucursal;
use Session;
class ControladorWebUs extends Controller
{
    public function index()
    {
            $pg = "us";
            $sucursal = new Sucursal();
            $aSucursales = $sucursal->obtenerTodos();
            return view("web.us", compact('pg', 'aSucursales'));
    }
}

