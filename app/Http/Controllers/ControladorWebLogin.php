<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use Illuminate\Http\Request;
use Session;
class ControladorWebLogin extends Controller
{
    public function index()
    {
            return view("web.login");
    }

    public function ingresar(Request $request){
        $correo = $request->input('txtCorreo');
        $clave = $request->input('txtClave');

        $cliente = new Cliente();
        $cliente -> obtenerPorCorreo($correo);

        if($cliente->idcliente > 0 && password_verify($clave, $cliente->clave)){

            $cliente->obtenerPorId($cliente->idcliente);
            Session::put("idcliente", $cliente->idcliente);
            return view("web.myaccount", compact('cliente'));

        }else{
            $msg = "Usuario o clave incorrectos, revísalos e intenta nuevamente.";
            return view("web.login", compact('msg'));
        }
    }
}


