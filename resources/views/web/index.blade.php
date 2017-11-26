@extends('layouts.home')
@section('content')

	

  <div class="full-fill" style="background-image:url('img/ligas-de-domino-top.jpg');"> 
   <div class="jumbotron jumbotron-pers">
    <div class="container">
      <div class="text-center">
        <h2 class="a-bold">Son tus deberes primero, <br> <span>ayudar al compañero.</span></h2>
        <p>Si tu amigo a de ganar, obliga al mano a pasar.</p>
        <div class="redes-content">
            <a href="#" class="redes"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="redes"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#" class="redes"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
   </div>
  </div>

<section id="somos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <div class="text">
                    <h2 class="a-bold">Ligas de domino</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat pulvinar tincidunt. Nam eget sagittis ex. Mauris porttitor est non diam tincidunt, sollicitudin fringilla ex egestas. Duis mauris felis, imperdiet ac sapien eleifend, mollis maximus leo. Vestibulum pulvinar diam ligula, nec vehicula lectus tempus id. Sed congue semper enim et dictum. Fusce tempus dapibus arcu, ut lobortis odio pulvinar sit amet.</p> 

                    <p>Suspendisse rutrum ultrices lorem. Sed hendrerit tristique elit, gravida pharetra diam volutpat ac. Aenean bibendum rhoncus efficitur. Duis iaculis scelerisque mi, ac tristique ipsum dictum et. Aliquam euismod finibus est et imperdiet. Praesent egestas felis sit amet sapien varius, gravida commodo lacus pharetra. Sed in suscipit metus, non tempor sem.</p>

                    <p>Praesent egestas felis sit amet sapien varius, gravida commodo lacus pharetra. Sed in suscipit metus, non tempor sem.</p>
                    <a class="btn btn-secondary" href="#"> Leer más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="estadisticas">
    <div class="container-fluid">
        <h2 class="a-bold">Posiciones</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="text-center bottom20">
                    <div class="borde-1">
                        <div class="img-estadisticas" style="background-image: url('img/rating1.jpg');"></div>
                    </div>
                    <a class="blanco text-primary a-bold" href="#">Rating (en tiempo real)</a>
                    <div class="boton-circ" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                        <div class="boton-circ-ad"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="collapse" id="collapse-1">
                    <div class="card">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 1 </span>Cras justo odio <span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 2 </span>Dapibus ac facilisis<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 3 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 4 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item"> <a class="btn btn-primary" href=""> Ver todo </a> </li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="text-center bottom20">
                    <div class="borde-1">
                        <div class="img-estadisticas" style="background-image: url('img/rating2.jpg');"></div>
                    </div>
                    <a class="blanco text-primary a-bold" href="#">Posición (por equipo)</a>
                    <div class="boton-circ" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                        <div class="boton-circ-ad"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="collapse" id="collapse-2">
                    <div class="card">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 1 </span>Cras justo odio <span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 2 </span>Dapibus ac facilisis<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 3 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 4 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item"> <a class="btn btn-primary" href=""> Ver todo </a> </li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="text-center bottom20">
                    <div class="borde-1">
                        <div class="img-estadisticas" style="background-image: url('img/rating1.jpg');"></div>
                    </div>
                    <a class="blanco text-primary a-bold" href="#">Rating (en tiempo real)</a>
                    <div class="boton-circ" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                        <div class="boton-circ-ad"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="collapse" id="collapse-3">
                    <div class="card">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 1 </span>Cras justo odio <span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 2 </span>Dapibus ac facilisis<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 3 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item text-truncate"><span class="btn btn-primary btn-sm"> 4 </span>Vestibulum at eros<span class="text-primary"> (158/542)</span></li>
                        <li class="list-group-item"> <a class="btn btn-primary" href=""> Ver todo </a> </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

<section id="entrete">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="img-entrete" style="background-image: url('img/entrete1.jpg');"></div>
            </div>
            <div class="col-sm-6">
                <div class="img-entrete" style="background-image: url('img/entrete2.jpg');"></div>
            </div>
        </div>
    </div>
</section>

<section id="noticias">
    <div class="container-fluid">
        <h2 class="a-bold">Últimas Noticias</h2>
        <div class="row">
            <div class="col-md-4 noti" style="background-image: url('img/noti1.jpg');">
              <div class="noticonte">
                <div class="middle">
                    <p class="a-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="btn btn-secondary" href="#"> Leer más</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 noti" style="background-image: url('img/noti2.jpg');">
              <div class="noticonte">
                <div class="middle">
                    <p class="a-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="btn btn-secondary" href="#"> Leer más</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 noti" style="background-image: url('img/noti3.jpg');">
              <div class="noticonte">
                <div class="middle">
                    <p class="a-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="btn btn-secondary" href="#"> Leer más</a>
                </div>
              </div>
            </div>
        </div>
    </div> 
</section>

<section id="suscrip">
    <div class="container-fluid">
        <h2>Suscribete <span class="text-primary">(para recibir nuestros boletines)</span></h2>
        <div class="row">
            <div class="col-md-4">
                <fieldset class="form-group">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre">
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Correo">
                </fieldset>
            </div>
            <div class="col-md-2 btn-enviar">
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </div>
</section>



@endsection