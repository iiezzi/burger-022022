<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Http\Request;
use Session;

class ControladorWebSignup extends Controller
{
    public function index()
    {
            return view("web.signup");
    }

    public function enviar (Request $request)
    {
        $nombre = $request->input('txtNombre');
        $apellido = $request->input('txtApellido');
        $correo = $request->input('txtCorreo');
        $dni = $request->input('txtDni');
        $celular = $request->input('txtCelular');
        $clave = $request->input('txtClave');

        $cliente = new Cliente();
        $cliente->obtenerPorCorreo($correo);
        
        if($correo==$cliente->correo){
            $msg["msg"] = "Este correo ya se encuentra registrado.";
            $msg["estado"] = "danger";
            return view("web.signup", compact('msg'));
        }

        $cliente = new Cliente();
        $cliente->nombre = $nombre;
        $cliente->apellido = $apellido;
        $cliente->correo = $correo;
        $cliente->dni = $dni;
        $cliente->celular = $celular;
        $cliente->clave = password_hash($clave, PASSWORD_DEFAULT);
        $cliente->insertar();

        return redirect("/thanksregistration");
    }
}

