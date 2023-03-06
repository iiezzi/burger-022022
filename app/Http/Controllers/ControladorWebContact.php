<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Http\Request;
use Session;
class ControladorWebContact extends Controller
{
    public function index()
    {
            return view("web.contact");
    }
    
    public function enviar (Request $request)
    {
        $nombre = $request->input('txtNombre');
        $apellido = $request->input('txtApellido');
        $telefono = $request->input('txtTelefono');
        $correo = $request->input('txtCorreo');
        $curriculum = $request->input('txtCurriculum');

        $postulacion = new Postulacion();
        $postulacion->nombre = $nombre;
        $postulacion->apellido = $apellido;
        $postulacion->telefono = $telefono;
        $postulacion->correo = $correo;
        $postulacion->curriculum = '';
        $postulacion->insertar();

        return redirect("/thankspostulation");
    }
}