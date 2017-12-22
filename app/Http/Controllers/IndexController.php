<?php

namespace App\Http\Controllers;

use App\League;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estado($estado)
    {
        $leagues = League::where('state', '=', strtoupper($estado))->get();
        if (!count($leagues)) {
            return view("adminlte::errors.404");
        }
        return view('web.estado')->with(array('leagues' =>$leagues, 'estado' => $estado));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liga($estado, $idLiga)
    {
        $league = League::where('id', '=', $idLiga)->first();
        $news = $league->news()->orderBy('id', 'desc')->take(3)->get();

        if (!count($league)) {
            return view("adminlte::errors.404");
        }
        return view('web.liga')->with(array('league' =>$league, 'news' => $news));
    }

    public function detalle_n($estado, $idLiga, $idNoticia)
    {
        $league = League::where('id', '=', $idLiga)->first();
        $new = News::where('id', '=', $idNoticia)->first();
        return view('web.noticia_in')->with(array('league' =>$league, 'new' => $new));

    }

    public function noticias_all($estado, $idLiga, $idNoticias)
    {
        $league = League::where('id', '=', $idLiga)->first();
        $idLeague = League::where('id', '=', $idNoticias)->first();
        $news = $idLeague->news()->orderBy('id', 'desc')->get();

        if (!count($idLeague)) {
            return view("adminlte::errors.404");
        }
        return view('web.noticias_all')->with(array('league' =>$league, 'news' => $news));
    }

    public function combo()
    {
        $league = League::where('id', '=', 1)->first();
        return $league;

    }



}
