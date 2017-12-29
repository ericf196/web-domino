<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function super_polla()
    {
        return view("adminlte::contenido.super_polla");
    }

    public function tabla_super_polla(Request $request)
    {
        $juegos = $request->get('cant_juegos');
        return view("juegos.super_polla_tabla")->with('juegos', $juegos);
    }
}
