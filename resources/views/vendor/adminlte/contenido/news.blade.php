@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

    <section id="contenido_principal">

        <div class="box box-primary box-gris">

            @role('admin_liga')
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
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(6);">Agregar
                        Noticias</a>
                    <a href="{{ url("/listado_jugadores") }}" class="btn btn-xs btn-primary">Listado Jugadores (Falta
                        modificar)</a>
                </div>

            </div>
            <br>
            @endrole

                    <!-- busqueda liga sin resultados -->
            {{--{{ $players->links() }}

            @if(count($players)==0)
                <div class="box box-primary col-xs-12">
                    <div class='aprobado' style="margin-top:70px; text-align: center">
                        <label style='color:#177F6B'>
                            ... no se encontraron resultados para su busqueda...
                        </label>
                    </div>
                </div>
            @endif--}}

        </div>

        <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

        </div>

    </section>
@endsection