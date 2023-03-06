<?php

namespace App\Http\Controllers;
use Session;
class ControladorWebRecoverpassword extends Controller
{
    public function index()
    {
            return view("web.recoverpassword");
    }
}

