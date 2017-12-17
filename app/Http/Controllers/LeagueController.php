<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class LeagueController extends Controller
{

    public function cambiar_informacion_league(Request $request)
    {
        $idleague = $request->input("id_league");
        $league = League::find($idleague);

        $reglas = ['email_league' => 'required|email|unique:leagues,email,' . $idleague];

        $mensajes = ['email.unique' => 'El email ya se encuentra registrado en la base de datos',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("mensajes.msj_rechazado")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        DB::beginTransaction();

        $league->name_league = strtoupper($request->input("name_league"));
        $league->description = strtoupper($request->input("description_league"));
        $league->state = strtoupper($request->input("state_league"));
        $league->city = strtoupper($request->input("city_league"));
        $league->address = strtoupper($request->input("address_league"));
        $league->name_admin = strtoupper($request->input("name_admin"));
        $league->email = $request->input("email_league");
        $league->phone = $request->input("phone_league");
        $save=$league->save();

        DB::commit();

        if ($save) {
            return view("mensajes.msj_correcto")->with("msj", "Liga actualizado correctamente");
        } else {
            return view("mensajes.msj_rechazado")->with("msj", "Hubo un error al actualizar");
        }
    }

    public function subir_logo_league(Request $request)
    {
        $idleague = $request->input("id_league");
        $league = League::find($idleague);

        $reglas = ['archivo_logo' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900'];

        $mensajes = ['archivo_logo.mimes' => 'Este tipo de imagenes no se permite',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("mensajes.msj_rechazado")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        DB::beginTransaction();
        $archivo = $request->file('archivo_logo');

        $extension = $archivo->getClientOriginalExtension(); //formato (jpg,gif etc)
        $imagen_nombre = "logo_id_" . $idleague . "." . $extension;
        Image::make($archivo)->resize(600, 600)->save('img/league_' . $idleague . '/logo/' . $imagen_nombre);

        $league=League::find($idleague);
        $league->url_logo = 'img/league_' . $idleague . '/logo/' . $imagen_nombre;
        $save=$league->save();
        DB::commit();

        if ($save) {
            return view("mensajes.msj_correcto")->with("msj", "El logo actualizado correctamente");
        } else {
            return view("mensajes.msj_rechazado")->with("msj", "Hubo un error al actualizar");
        }
    }


    public function subir_portada_league(Request $request)
    {
        $idleague = $request->input("id_league");

        $reglas = ['archivo_portada' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900'];

        $mensajes = ['archivo_portada.mimes' => 'Este tipo de imagenes no se permite',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("mensajes.msj_rechazado")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        DB::beginTransaction();
        $archivo = $request->file('archivo_portada');

        $extension = $archivo->getClientOriginalExtension(); //formato (jpg,gif etc)
        $imagen_nombre = "portada_id_" . $idleague . "." . $extension;
        Image::make($archivo)->resize(900, 400)->save('img/league_' . $idleague . '/logo/' . $imagen_nombre);

        $league=League::find($idleague);
        $league->url_portada = 'img/league_' . $idleague . '/logo/' . $imagen_nombre;
        $save=$league->save();
        DB::commit();

        if ($save) {
            return view("mensajes.msj_correcto")->with("msj", "La portada fue actualizada correctamente");
        } else {
            return view("mensajes.msj_rechazado")->with("msj", "Hubo un error al actualizar");
        }
    }



}
