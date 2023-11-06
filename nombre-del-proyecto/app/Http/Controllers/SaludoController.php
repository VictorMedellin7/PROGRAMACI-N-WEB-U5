<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo($saludo, $nombre, $apellido = null)
    {
        if ($saludo === "saludo") {
            if ($apellido !== null) {
                $mensaje = "Hola " . $nombre . " " . $apellido;
            } else {
                $mensaje = "Hola " . $nombre;
            }
            return view('saludo', ['mensaje' => $mensaje]);
        }
    }
}
