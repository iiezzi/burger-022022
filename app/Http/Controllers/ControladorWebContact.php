<?php

namespace App\Http\Controllers;

class ControladorWebContact extends Controller
{
    public function index()
    {
            return view("web.contact");
    }
}