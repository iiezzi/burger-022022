<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades\Cliente;
use Session;

class ControladorWebReplacePassword extends Controller
{
      public function index()
      {
            return view("web.replacepassword");
      }

      public function guardar(Request $request){

            $clave = $request->input('txtClave');
            $reClave = $request->input('txtReClave');

            if ($clave == $reClave) {

                  $cliente = new Cliente();

                  $cliente->obtenerPorId(Session::get('idcliente'));
                  $cliente->clave = password_hash($clave, PASSWORD_DEFAULT);

                  $cliente->guardar();

                  $msg['estado'] = "success";
                  $msg['msg'] = "Su contraseña ha sido cambiada exitosamente.";

                  return view("web.replacepassword", compact('msg'));
                  } else {
                  $msg['estado'] = "danger";
                  $msg['msg'] = "Las contraseñas no coinciden.";

                  return view("web.replacepassword", compact('msg'));
            }
      }
}
