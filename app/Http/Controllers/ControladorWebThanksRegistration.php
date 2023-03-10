<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use Illuminate\Http\Request;


class ControladorWebThanksRegistration extends Controller
{
    public function index()
    {
            return view("web.thanksregistration");
    }
}