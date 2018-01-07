<?php

namespace App\Http\Controllers;

use App\Category;
use App\League;
use App\News;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('web.estado')->with(array('leagues' => $leagues, 'estado' => $estado));
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
        $rankingFive = Category::find(1)->users()->where('league_id', $idLiga)->orderBy('games.avg', 'desc')->take(5)->get();

        $rankingSupP = $this->ranking_super_polla($idLiga);
        //dd($rankingSupP);
        //dd($rankingSupP['super_polla_1'][0]->id);
        if (!count($league)) {
            return view("adminlte::errors.404");
        }
        return view('web.liga')->with(array('league' => $league, 'news' => $news, 'rankings' => $rankingFive, 'rankingsS' => $rankingSupP));

    }

    public function detalle_n($estado, $idLiga, $idNoticia)
    {
        $league = League::where('id', '=', $idLiga)->first();
        $new = News::where('id', '=', $idNoticia)->first();
        return view('web.noticia_in')->with(array('league' => $league, 'new' => $new));

    }

    public function noticias_all($estado, $idLiga, $idNoticias)
    {
        $league = League::where('id', '=', $idLiga)->first();
        $idLeague = League::where('id', '=', $idNoticias)->first();
        $news = $idLeague->news()->orderBy('id', 'desc')->get();

        if (!count($idLeague)) {
            return view("adminlte::errors.404");
        }
        return view('web.noticias_all')->with(array('league' => $league, 'news' => $news));
    }

    public function combo()
    {
        $league = League::where('id', '=', 1)->first();
        return $league;

    }


    public function sent_table(Request $request)
    {

        DB::beginTransaction();
        $rowTable = $request->json()->all();
        foreach ($rowTable as $row) {
            User::find($row['IDJUGADOR'])->categories_individual()->attach(array(1 => array('jj' => $row['J/J'], 'jg' => $row['J/G'], 'jp' => $row['J/P'],

                'pts_p' => $row['PTOS P'], 'pts_n' => $row['PTOS N'], 'pts_n_p' => 0, 'pts_p_p' => 0, 'avg' => $row['AVG'], 'efec' => $row['EFEC'], 'pro' => $row['PRO'], 'z' => $row['Z'], 'pro_g' => $row['PRO2'], 'season' => Carbon::now()->year)));

            $t = User::find($row['IDJUGADOR'])->categories()->withPivot('jj', 'jg', 'jp', 'pts_p', 'pts_n', 'avg', 'efec', 'pro', 'pro_g', 'z')->wherePivot('category_id', 1)->wherePivot('season', '=', Carbon::now()->year)->first();


            if ($t) {
                $jj = $t->pivot->jj;
                $jg = $t->pivot->jg;
                $jp = $t->pivot->jp;
                $pts_p = $t->pivot->pts_p;
                $pts_n = $t->pivot->pts_n;
                $avg = $t->pivot->avg;
                $efec = $t->pivot->efec;
                $pro = $t->pivot->pro;
                $pro_g = $t->pivot->pro_g;

                $z = $t->pivot->z;

                $jjAcum = $jj + $row['J/J']; //Juegos Jugados
                $jgAcum = $jg + $row['J/G']; //Juegos Ganados
                $jpAcum = $jp + $row['J/P']; //Juegos Perdidos
                $ppAcum = $jp + $row['J/P']; //Juegos Positivos
                $pnAcum = $jp + $row['J/P']; //Juegos negativos
                $zAcum = $z + $row['Z'];     //Zapato
                $proAcum = $ppAcum/$jjAcum;     //Promedio(pro)
                $avgAcum = $ppAcum-$pnAcum;  //average (avg)

                //efec
                $efecAcum = ($jgAcum * 1000) / $jjAcum;
                //pro g
                $pro_gAcum = 1 + ($jgAcum * 2) + (($jjAcum - $jgAcum) * (-1)) + ($zAcum * 1) + 6;


                User::find($row['IDJUGADOR'])->categories()->wherePivot('season', '=', Carbon::now()->year)->updateExistingPivot
                (1, array('jj' => $jjAcum, 'jg' => $jgAcum, 'jp' => $jpAcum, 'pts_p' => $ppAcum,
                    'pts_n' => $pnAcum, 'avg' => $avgAcum, 'efec' => $efecAcum, 'pro' => $proAcum,
                    'z' => $zAcum, 'pro_g' => $pro_gAcum));
            } else {
                User::find($row['IDJUGADOR'])->categories()->attach(array(1 => array('jj' => $row['J/J'], 'jg' => $row['J/G'], 'jp' => $row['J/P'],
                    'pts_p' => $row['PTOS P'], 'pts_n' => $row['PTOS N'], 'pts_n_p' => 0, 'pts_p_p' => 0, 'avg' => $row['AVG'], 'efec' => $row['EFEC']
                , 'pro' => $row['PRO'], 'z' => $row['Z'], 'pro_g' => $row['PRO2'], 'season' => Carbon::now()->year)));


            }
        }
        DB::commit();
        return response()->json(['data' => 'Se Agrego con exito']);

        /*$user=User::find(4)->categories()->withPivot('jj ', 'jg','jp','pts_p','pts_n ','avg ','efec','pro','pro_g')->get();
        return $user;*/

        //$user=User::find(4)->categories_individual()->withPivot('jj ', 'jg','jp','pts_p','pts_n ','avg ','efec','pro')->get();

        //$user->categories_individual()->sync(array(4 => array('expires' => true)));
        //gettype($postbody);
    }


    public function ranking_super_polla($idLiga)

    {
        /*return User::where('league_id', '=', 1)->has('categories')->with(array('categories' => function ($query) {
           $query->wherePivot('category_id', '1')->orderBy('games.avg', 'DESC');
       }))->get();*/

        /*$pedroGorrin = Category::find(1)->users()->where('league_id', 1)->orderBy('games.avg', 'desc')->take(5)->get();
        return $pedroGorrin;*/

        //return Category::find(1)->users_individual()->select('created_at')->where('league_id', 1)->distinct('created_at')/*->orderBy('games_individual.avg', 'desc')->orderBy('games_individual.created_at', 'desc')->take(5)*/->get();

        $dates = DB::table('games_individual')->orderBy('created_at', 'desc')->select('created_at')->distinct('created_at')->take(4)->get();
        $data = [];
        foreach ($dates as $key => $date) {

            $collection = Category::find(1)->users_individual()->where('league_id', $idLiga)->orderBy('games_individual.avg', 'desc')->where('games_individual.created_at', $date->created_at)->take(3)->get(); // between
            //echo $collection->toJson();
            $data['' . Carbon::parse($date->created_at)->format('d/m/Y')] = $collection;

            //echo Carbon::parse($date->created_at)->format('d/m/Y h:i');
            /*echo gettype($collection);
            die();*/
        }

        return ($data);
    }


}
