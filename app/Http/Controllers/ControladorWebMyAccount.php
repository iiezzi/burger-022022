<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use App\Entidades\Pedido;
use Illuminate\Http\Request;
use Session;

class ControladorWebMyAccount extends Controller
{
    public function index()
    {
        $cliente = new Cliente();
        $cliente->obtenerPorId(Session::get('idcliente'));

        $pedido = new Pedido();
        $aPedidos=$pedido->obtenerPorCliente(Session::get("idcliente"));

            return view("web.myaccount", compact('cliente', 'aPedidos'));
    }
}