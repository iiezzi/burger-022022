<?php

namespace App\Http\Controllers;

use Session;

class ControladorWebCart extends Controller
{
      public function index()
      {
              return view("web.cart");
      }
}
