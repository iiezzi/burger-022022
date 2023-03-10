<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades\Cliente;
use Session;

class ControladorWebEditData extends Controller
{
    public function index(){

        $cliente = new Cliente();
        $cliente->obtenerPorId(Session::get('idcliente'));

        return view("web.editdata", compact('cliente'));
    }

    public function editar(Request $request){

        $nombre = $request->input('txtNombre');
        $apellido = $request->input('txtApellido');
        $correo = $request->input('txtCorreo');
        $dni = $request->input('txtDni');
        $celular = $request->input('txtCelular');
        $clave = $request->input('txtClave');
        
        $cliente = new Cliente();
        $cliente->obtenerPorId(Session::get('idcliente'));

        $cliente->nombre = $nombre;
        $cliente->apellido = $apellido;
        $cliente->correo = $correo;
        $cliente->dni = $dni;
        $cliente->celular = $celular;

        $cliente->guardar();
        $msg["estado"] = "success";
        $msg["msg"] = "Cambiado correctamente";

        return view("web.editdata", compact('msg', 'cliente'));
    }
}