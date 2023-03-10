<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Http\Request;

class ControladorWebContact extends Controller
{
    public function index()
    {
        return view("web.contact");
    }

    public function enviar(Request $request)
    {
        $nombre = $request->input('txtNombre');
        $apellido = $request->input('txtApellido');
        $telefono = $request->input('txtTelefono');
        $correo = $request->input('txtCorreo');
        
        $postulacion = new Postulacion();
        $postulacion->curriculum = "";

        if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
            $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
            $nombreRandom = date("Ymdhmsi") . ".$extension"; //genera un nombreRandom con año, fecha y hora
            $archivo_tmp = $_FILES["archivo"]["tmp_name"];

            if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {;
                move_uploaded_file($archivo_tmp, env('APP_PATH') . "/public/files/$nombreRandom"); //guarda el archivo fisicamente
                $postulacion->curriculum = $nombreRandom;
            }
        }
        $postulacion->nombre = $nombre;
        $postulacion->apellido = $apellido;
        $postulacion->telefono = $telefono;
        $postulacion->correo = $correo;
        $postulacion->insertar();

        return redirect("/thankspostulation");
    }
}
