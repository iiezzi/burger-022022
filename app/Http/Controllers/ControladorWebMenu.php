<?php

namespace App\Http\Controllers;

use App\Entidades\Producto;
use App\Entidades\Categoria;

class ControladorWebMenu extends Controller
{
    public function index()
    {
        $pg = "menu";

        $producto = new Producto();
        $aProductos = $producto->obtenerTodos();

        $categoria = new Categoria();
        $aCategorias = $categoria->obtenerTodos();

        return view("web.menu", compact('pg', 'aProductos', 'aCategorias'));
    }
}
