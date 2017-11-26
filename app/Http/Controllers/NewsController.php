<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function panel_noticias()
    {
        return view("adminlte::contenido.news");
    }

    public function form_nuevo_noticia()
    {
        return view("adminlte::formularios.form_nuevo_noticia");
    }
}
