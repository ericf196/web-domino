<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Support\Facades\File;


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
        $league = League::where('state', '=', 'LARA');
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

    public function create_directory()
    {
        $result=File::makeDirectory('img/league_1'  , $mode = 0777, true, true);
        $result1=File::makeDirectory('img/league_1/users', $mode = 0777, true, true);
        $result2=File::makeDirectory('img/league_1/news', $mode = 0777, true, true);
        echo $result2;
    }
}
