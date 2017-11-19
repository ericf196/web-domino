<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{


    public function form_nuevo_usuario()
    {
        //carga el formulario para agregar un nuevo usuario
        $roles = Role::all();
        return view("adminlte::formularios.form_nuevo_usuario")->with("roles", $roles);

    }


    public function form_nuevo_rol()
    {
        //carga el formulario para agregar un nuevo rol
        $roles = Role::all();
        return view("adminlte::formularios.form_nuevo_rol")->with("roles", $roles);
    }

    public function form_nuevo_permiso()
    {
        //carga el formulario para agregar un nuevo permiso
        $roles = Role::all();
        $permisos = Permission::all();
        return view("adminlte::formularios.form_nuevo_permiso")->with("roles", $roles)->with("permisos", $permisos);
    }


    public function form_nuevo_liga()
    {
        //carga el formulario para agregar un nueva liga
        $roles = Role::all();
        return view("adminlte::formularios.form_nuevo_liga")->with("roles", $roles);

    }


    public function listado_usuarios()
    {
        //presenta un listado de usuarios paginados de 100 en 100
        $usuarios = User::paginate(100);
        $leagues = League::paginate(100);
        if (Auth::user()->isRole('administrador') || Auth::user()->isRole('admin_liga') || Auth::user()->isRole('super_usuario')) {
            return view("adminlte::listados.listado_usuarios")->with("usuarios", $usuarios)->with("leagues", $leagues);
        } else {
            return view("adminlte::errors.404");
        }

    }


    public function crear_usuario(Request $request)
    {
        //crea un nuevo usuario en el sistema

        $reglas = ['password' => 'required|min:8',
            'email' => 'required|email|unique:users',];

        $mensajes = ['password.min' => 'El password debe tener al menos 8 caracteres',
            'email.unique' => 'El email ya se encuentra registrado en la base de datos',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        $usuario = new User;
        $usuario->name = strtoupper($request->input("nombres") . " " . $request->input("apellidos"));
        $usuario->nombres = strtoupper($request->input("nombres"));
        $usuario->apellidos = strtoupper($request->input("apellidos"));
        $usuario->telefono = $request->input("telefono");
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));

        if ($usuario->save()) {


            return view("adminlte::mensajes.msj_usuario_creado")->with("msj", "Usuario agregado correctamente");
        } else {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar ;...");
        }

    }


    public function crear_liga(Request $request)
    {
        $reglas = ['email' => 'required|email|unique:leagues'];

        $mensajes = ['email.unique' => 'El email ya se encuentra registrado en la base de datos',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        DB::beginTransaction();
        $usuario = new User;
        $usuario->name = strtoupper($request->input("name") . " " . $request->input("apellido"));
        $usuario->nombres = strtoupper($request->input("name"));
        $usuario->apellidos = strtoupper($request->input("apellido"));
        $usuario->telefono = $request->input("phone");
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));
        $usuario->save();

        $userIdInclude = User::where('email', '=', $request->input("email"))->first()->id;

        $rolIdInclude = User::find($userIdInclude);
        $rolIdInclude->roles()->attach(2);

        $league = new League();
        $league->name_league = strtoupper($request->input("name_league"));
        $league->description = strtoupper($request->input("description_league"));
        $league->state = strtoupper($request->input("state_league"));
        $league->city = strtoupper($request->input("city_league"));
        $league->address = strtoupper($request->input("address_league"));
        $league->name_admin = strtoupper($request->input("name_admin"));
        $league->email = $request->input("email_league");
        $league->phone = $request->input("phone_league");
        $league->user_id = $userIdInclude;


        DB::commit();
        if ($league->save()) {
            return view("adminlte::mensajes.msj_usuario_creado")->with("msj", "Liga agregada correctamente");
        } else {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar Liga...");
        }

    }


    public function crear_rol(Request $request)
    {

        $rol = new Role;
        $rol->name = $request->input("rol_nombre");
        $rol->slug = $request->input("rol_slug");
        $rol->description = $request->input("rol_descripcion");
        if ($rol->save()) {
            return view("adminlte::mensajes.msj_rol_creado")->with("msj", "Rol agregado correctamente");
        } else {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar ;...");
        }
    }


    public function crear_permiso(Request $request)
    {

        $permiso = new Permission;
        $permiso->name = $request->input("permiso_nombre");
        $permiso->slug = $request->input("permiso_slug");
        $permiso->description = $request->input("permiso_descripcion");
        if ($permiso->save()) {
            return view("adminlte::mensajes.msj_permiso_creado")->with("msj", "Permiso creado correctamente");
        } else {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar ;...");
        }


    }

    public function asignar_permiso(Request $request)
    {

        $roleid = $request->input("rol_sel");
        $idper = $request->input("permiso_rol");
        $rol = Role::find($roleid);
        $rol->assignPermission($idper);

        if ($rol->save()) {
            return view("vendor.adminlte.mensajes.msj_permiso_creado")->with("msj", "Permiso asignado correctamente");
        } else {
            return view("vendor.adminlte.mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar ;...");
        }


    }


    public function form_editar_usuario($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();
        return view("vendor.adminlte.formularios.form_editar_usuario")->with("usuario", $usuario)
            ->with("roles", $roles);
    }

    public function editar_usuario(Request $request)
    {

        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);
        $usuario->name = strtoupper($request->input("nombres"));
        $usuario->apellidos = strtoupper($request->input("apellidos"));
        $usuario->telefono = $request->input("telefono");

        if ($request->has("rol")) {
            $rol = $request->input("rol");
            $usuario->revokeAllRoles();
            $usuario->assignRole($rol);
        }

        if ($usuario->save()) {
            return view("vendor.adminlte.mensajes.msj_usuario_actualizado")->with("msj", "Usuario actualizado correctamente")
                ->with("idusuario", $idusuario);
        } else {
            return view("vendor.adminlte.mensajes.mensaje_error")->with("msj", "..Hubo un error al agregar ; intentarlo nuevamente..");
        }
    }


    public function form_editar_league($id)
    {
        $leagues = League::find($id);
        $user=$leagues->user;
        $roles = Role::all();
        return view("vendor.adminlte.formularios.form_editar_league")->with("leagues", $leagues)->with("user", $user);

    }

    public function editar_league(Request $request)
    {
        $idleague = $request->input("id_league");
        $iduser = $request->input("id_user");
        $league = League::find($idleague);

        $reglas = ['password' => 'required|min:8|confirmed',
            'email' => 'required|email|unique:users,email,'.$iduser .'id'];

        $mensajes = ['password.min' => 'El password debe tener al menos 8 caracteres',
            'email.unique' => 'El email ya se encuentra registrado en la base de datos',
            'password.confirmed' => 'Su password no coincide',];

        $validator = Validator::make($request->all(), $reglas, $mensajes);
        if ($validator->fails()) {
            return view("adminlte::mensajes.mensaje_error")->with("msj", "...Existen errores...")
                ->withErrors($validator->errors());
        }

        $league->name_league = strtoupper($request->input("name_league"));
        $league->description = strtoupper($request->input("description_league"));
        $league->state = strtoupper($request->input("state_league"));
        $league->city = strtoupper($request->input("city_league"));
        $league->address = strtoupper($request->input("address_league"));
        $league->name_admin = strtoupper($request->input("name_admin"));
        $league->email = $request->input("email_league");
        $league->phone = $request->input("phone_league");

        $usuario = User::find($iduser);

        $usuario->name = strtoupper($request->input("nombres") . " " . $request->input("apellidos"));
        $usuario->nombres = strtoupper($request->input("nombres"));
        $usuario->apellidos = strtoupper($request->input("apellidos"));
        $usuario->telefono = $request->input("phone");
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));
        $usuario->save();

        if ($league->save()) {
            return view("vendor.adminlte.mensajes.msj_usuario_actualizado")->with("msj", "Liga actualizado correctamente")
                ->with("idleague", $idleague);
        } else {
            return view("vendor.adminlte.mensajes.mensaje_error")->with("msj", "..Hubo un error al editar ; intentarlo nuevamente..");
        }
    }


    public function buscar_usuario(Request $request)
    {
        $dato = $request->input("dato_buscado");
        $usuarios = User::where("name", "like", "%" . $dato . "%")->orwhere("apellidos", "like", "%" . $dato . "%")->paginate(100);
        return view('vendor.adminlte.listados.listado_usuarios')->with("usuarios", $usuarios);
    }

    public function buscar_league(Request $request)
    {
        $dato = $request->input("dato_buscado1");
        $leagues = Leagues::where("name_league", "like", "%" . $dato . "%")->orwhere("description", "like", "%" . $dato . "%")->paginate(100);
        return view('vendor.adminlte.listados.listado_usuarios')->with("leagues", $leagues);
    }


    public function borrar_usuario(Request $request)
    {
        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);

        if ($usuario->delete()) {
            return view("vendor.adminlte.mensajes.msj_usuario_borrado")->with("msj", "Usuario borrado correctamente");
        } else {
            return view("vendor.adminlte.mensajes.mensaje_error")->with("msj", "..Hubo un error al agregar ; intentarlo nuevamente..");
        }


    }

    public function editar_acceso(Request $request)
    {
        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));
        if ($usuario->save()) {
            return view("vendor.adminlte.mensajes.msj_usuario_actualizado")->with("msj", "Usuario actualizado correctamente")->with("idusuario", $idusuario);
        } else {
            return view("vendor.adminlte.mensajes.mensaje_error")->with("msj", "...Hubo un error al agregar ; intentarlo nuevamente ...");
        }
    }


    public function asignar_rol($idusu, $idrol)
    {

        $usuario = User::find($idusu);
        $usuario->assignRole($idrol);
        $usuario = User::find($idusu);
        $rolesasignados = $usuario->getRoles();
        return json_encode($rolesasignados);


    }


    public function quitar_rol($idusu, $idrol)
    {

        $usuario = User::find($idusu);
        $usuario->revokeRole($idrol);
        $rolesasignados = $usuario->getRoles();
        return json_encode($rolesasignados);


    }


    public function form_borrado_usuario($id)
    {
        $usuario = User::find($id);
        return view("vendor.adminlte.confirmaciones.form_borrado_usuario")->with("usuario", $usuario);

    }


    public function quitar_permiso($idrole, $idper)
    {

        $role = Role::find($idrole);
        $role->revokePermission($idper);
        $role->save();

        return "ok";
    }


    public function borrar_rol($idrole)
    {

        $role = Role::find($idrole);
        $role->delete();
        return "ok";
    }

    public function all()
    {
        // Auth::user()->id; // Adminsitrador de liga
        /*$prueba=User::find(3)->league;
        echo($prueba);
        $prueba=User::find(4)->categories()->withPivot('jj ', 'jg','jp','pts_p','pts_n ','avg ','efec','pro','pro_g ')->get();
        echo($prueba);*/

        $idleague = 10;
        $league = League::find($idleague);
        echo($league->user);

    }


}
