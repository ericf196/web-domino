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
        <div class="col-md-8">
          <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Venezuela / Lara</h4>
                </div>
                <div class="card-block">
                  <ul class="nomLigaUl">
                    <li class="nomLiga">
                      <a href="liga">
                        <img class="imgCircle" src="img/logo-pena.jpg"> 
                        <h4>Peña del Domino</h4>
                        <span>Cabudare</span>
                      </a>
                    </li>
                    <li class="nomLiga">
                      <a href="jugador.html">
                        <img class="imgCircle" src="img/logo-club2.jpg"> 
                        <h4>Domino en guardia</h4>
                        <span>Quibor</span>
                      </a>
                    </li>
                    <li class="nomLiga">
                      <a href="jugador.html">
                        <img class="imgCircle" src="img/logo-liga-domino-user.png"> 
                        <h4>Master Domino 4/6</h4>
                        <span>Cubiro</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h2 class="h5 display display"></h2>
            </div>
            <div class="card-block">
              <p></p>
             </div>
          </div>
        </div>
      </div>

    </div>
</section>

@endsection