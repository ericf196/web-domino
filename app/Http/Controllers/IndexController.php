<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Http\Request;

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
    public function estado()
    {
        /*dd($estado);*/
        $league=League::where('state','=' , 'LARA');
        return view('web.estado');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liga()
    {
        return view('web.liga');
    }
}
