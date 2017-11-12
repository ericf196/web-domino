@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')


    <section id="contenido_principal">


        <div class="box box-primary box-gris">

            <div class="box-header">
                <h4 class="box-title">Usuarios</h4>
                <form action="{{ url('buscar_usuario') }}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
                        <span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar">
					</span>

                    </div>

                </form>


                <div class="margin" id="botones_control">
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar
                        Usuario</a>
                    <a href="{{ url("/listado_usuarios") }}" class="btn btn-xs btn-primary">Listado Usuarios</a>
                    @role('super_usuario')
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary"
                       onclick="cargar_formulario(2);">Roles</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(3);">Permisos</a>
                    @endrole
                </div>

            </div>

            <div class="box-body box-white">

                <div class="table-responsive">

                    <table class="table table-hover table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>codigo</th>
                            @role('super_usuario')
                            <th>Rol</th> @endrole
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($usuarios as $usuario)
                            <tr role="row" class="odd">
                                <td>{{ $usuario->id }}</td>
                                @role('super_usuario')
                                <td><span class="label label-default">

                                        @foreach($usuario->getRoles() as $roles)
                                            {{  $roles.","  }}
                                        @endforeach

								</span>
                                </td>
                                @endrole
                                <td class="mailbox-messages mailbox-name">
                                    <div class="enlaceJs" onclick="verinfo_usuario({{  $usuario->id }})"
                                         style="display:block"><i
                                                class="fa fa-user"></i>&nbsp;&nbsp;{{ $usuario->name  }}</div>
                                </td>
                                <td>{{ $usuario->email }}</td>
                                <td>

                                    <button type="button" class="btn  btn-default btn-xs"
                                            onclick="verinfo_usuario({{  $usuario->id }})"><i
                                                class="fa fa-fw fa-edit"></i></button>
                                    <button type="button" class="btn  btn-danger btn-xs"
                                            onclick="borrado_usuario({{  $usuario->id }});"><i
                                                class="fa fa-fw fa-remove"></i></button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>


            {{ $usuarios->links() }}

            @if(count($usuarios)==0)


                <div class="box box-primary col-xs-12">

                    <div class='aprobado' style="margin-top:70px; text-align: center">

                        <label style='color:#177F6B'>
                            ... no se encontraron resultados para su busqueda...
                        </label>

                    </div>

                </div>


            @endif

        </div>
    </section>
@endsection