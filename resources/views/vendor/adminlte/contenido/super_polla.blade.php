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



        <div id="game_super_polla" style="border: dotted 1px black; height: 800px;"></div>


    </section>
@endsection

