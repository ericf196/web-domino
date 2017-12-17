@extends('layouts.home')
@section('content')

    @include('web.sections.top')

<section id="subContent">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3">
          @include('web.sections.sidebar') 
        </div>

        <div class="col-md-9">
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h4>Venezuela / {{strtolower($league->state)}} / <span class="text-primary">{{ strtolower($league->name_league)}}</span></h4>
            </div>
            <div id="portadaFront">
                <div class="portada" style="background-image: url('../{{strtolower($league->url_portada)}}');"></div>
            </div>

            @include('web.sections.noticias')
            @include('web.sections.juegos')
            @include('web.sections.contactos')       
                
          </div>
        </div>
        
      </div><!-- row -->
    </div><!-- container-fluid -->
</section><!-- fin subContent -->

@endsection