<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function producto($numero)
    {
        $productos = [
            ['nombre' => 'Teclado', 'precio' => 25],
            ['nombre' => 'Ratón', 'precio' => 12],
            ['nombre' => 'Monitor', 'precio' => 140],
        ];

        if (isset($productos[$numero])) {
            $producto = $productos[$numero];
        } else {
            $producto = null;
        }

        return view('producto', ['producto' => $producto]);
    }
}