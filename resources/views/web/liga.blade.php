@extends('layouts.home')
@section('content')

  <div class="img-fon" style="background-image:url('img/ligas-de-domino-top.jpg');"> 
   <div class="jumbotron jumbotron-pers2">
    <div class="container">
      <div class="text-center">
        <h2 class="a-bold">Son tus deberes primero</h2>
        <p>Si tu amigo a de ganar, obliga al mano a pasar.</p>
      </div>
    </div>
   </div>
  </div>

<section id="subContent">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3">
          @include('web.sections.sidebar') 
        </div>

        <div class="col-md-9">
          <div class="card">

            <div class="card-header d-flex align-items-center">
              <h4>Venezuela / Lara / <span class="text-primary">Peña del domino</span></h4>
            </div>
            <div id="portadaFront">
                <div class="portada" style="background-image: url('img/img-portada.jpg');"></div>
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