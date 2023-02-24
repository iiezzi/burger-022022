<?php

namespace App\Http\Controllers;

use App\Entidades\Producto;

class ControladorWebMenu extends Controller
{
    public function index()
    {
        $pg = "menu";
        $producto = new Producto();
        $aProductos = $producto->obtenerTodos();
        return view("web.menu", compact('pg', 'aProductos'));
    }
}
