@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

    <section id="contenido_principal">
        <form method="POST" action="{{ url('tabla_super_polla') }}" id="f_super_polla" class="submit_super_polla">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <select name="cant_juegos" id="cant_juegos">
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            <button class="btn btn-primary" id="submit_super_polla" type="submit" value="Enviar" name="super_polla" >Enviar
            </button>
        </form>
        <br>
        <div id="game_super_polla"></div><br><hr><br>

            <div class="box box-primary">

                <div class="table-responsive">

                    <table class="table table-hover table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                        <tbody>

                        {{-- @foreach($leagues as $league) --}}
                            <tr role="row" class="odd">
                                <td>{{-- --}}</td>
                                <td class="mailbox-messages mailbox-name">
                                    <div class="enlaceJs" onclick="verinfo_league({{--  --}})"
                                         style="display:block"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{--   --}}</div>
                                </td>
                                <td>{{--  --}}</td>

                            </tr>
                        {{--  @endforeach --}}

                        </tbody>
                    </table>

                </div>
            </div>

             <!-- busqueda liga sin resultados -->
            {{-- $leagues->links() --}}

            {{-- @if(count($leagues)==0) --}}
            <div class="box box-primary">
                <div class='aprobado' style="margin-top:70px; text-align: center">
                    <label style='color:#177F6B'>
                         ... no se encontraron resultados para su busqueda...
                    </label>
                </div>
            </div>
            {{-- @endif --}}
    </section>
@endsection

