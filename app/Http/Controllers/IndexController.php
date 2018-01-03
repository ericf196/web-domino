<?php

namespace App\Http\Controllers;

use App\League;
use App\News;
use App\User;
use Carbon\Carbon;
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

        if (!count($league)) {
            return view("adminlte::errors.404");
        }
        return view('web.liga')->with(array('league' => $league, 'news' => $news));
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
        $rowTable = $request->json()->all();
        //foreach ($rowTable as $row) {
           // User::find(4)->categories_individual()->attach(array(1 => array('jj' => $row['J/J'], 'jg' => $row['J/G'], 'jp' => $row['J/P'],
              //  'pts_p' => $row['PTOS P'], 'pts_n' => $row['PTOS N'], 'pts_n_p' => 0, 'pts_p_p' => 0, 'avg' => $row['AVE'], 'efec' => $row['EFEC'], 'pro' => $row['PRO']/*, 'season' => Carbon::now()->subYear()->year . '/' . Carbon::now()->year*/)));
       // }


        if(User::find(4)->categories()){
            $userCategories=User::find(4)->categories()->wherePivot('season', '=', '2017/2018')->withPivot('jj', 'jg','jp','pts_p','pts_n ','avg ','efec','pro','pro_g', 'season')->get();

            foreach ($userCategories as $userCategory) {
                echo $userCategory->pivot->category_id;
            }
            //return $userCategories;
        }

        //return response()->json(['data' => 'Se Agrego con exito']);


        //$user=User::find(4)->categories_individual()->attach(array(1 => array('jj' => 10,'jg' => 10,'jp' => 10,'pts_p' => 10,'pts_n' => 10,'pts_n_p' => 10,'pts_p_p' => 10,'avg' => 10,'efec' => 10,'pro' => 10)));
        //return $rowTable;

        /*User::find(4)->categories()->updateExistingPivot(4, array('monthly_count' => $userFunctionalityCount - 1));

        return $postbody;*/

        /*if($request->json()->all()){
            $postbody = $request->json()->all();
        }
        return $postbody;*/

        /*$user=User::find(4)->categories()->withPivot('jj ', 'jg','jp','pts_p','pts_n ','avg ','efec','pro','pro_g')->get();
        return $user;*/

        //$user=User::find(4)->categories_individual()->withPivot('jj ', 'jg','jp','pts_p','pts_n ','avg ','efec','pro')->get();

        //$user->categories_individual()->sync(array(4 => array('expires' => true)));
        //gettype($postbody);
    }


}
