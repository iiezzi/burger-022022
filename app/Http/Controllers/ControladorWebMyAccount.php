<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use Illuminate\Http\Request;
use Session;

class ControladorWebMyAccount extends Controller
{
    public function index()
    {
            return view("web.myaccount");
    }
}