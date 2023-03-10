<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Http\Request;


class ControladorWebThanksPostulation extends Controller
{
    public function index()
    {
            return view("web.thankspostulation");
    }
}