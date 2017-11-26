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
          <div class="card">
            <div class="card-header">
              <h5 class="text-center">Información de la liga</h5>
            </div>
            <div class="card-block">
              <p class="text-center"><img class="logoLigaUser" src="img/logo-pena.jpg" /></p>
              <p>
                Nombre: <strong>Peña del domino</strong><br>
                Ubicación: <strong>Cabudare, Lara - Venezuela</strong><br>
                Integrantes: <strong>120</strong><br>
              </p>
              <p><img src="img/imgAnun.jpg" class="img-fluid" alt=""></p>
              <p><img src="img/imgAnun.jpg" class="img-fluid" alt=""></p>
              <p><img src="img/imgAnun.jpg" class="img-fluid" alt=""></p>
              <p><img src="img/imgAnun.jpg" class="img-fluid" alt=""></p>
             </div>
          </div>
        </div>

        <div class="col-md-9">

          <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Venezuela / Lara / <span class="text-primary">Peña del domino</span></h4>
                </div>
      <div id="portadaFront">
          <div class="portada" style="background-image: url('img/img-portada.jpg');">
            </div>
      </div>
      <div id="noticiasFront">
              <h3 class="title-front text-center">Noticias y eventos recientes</h3>
              <div class="divider"></div>
              <div class="container-fluid">
            <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="box" >
                      <img src="img/noti1.jpg" class="img-fluid">
                      <h5 class="mt-4 ml-4 mr-4">Example Gallery Item</h5>
                      <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="box" >
                      <img src="img/noti2.jpg" class="img-fluid">
                      <h5 class="mt-4 ml-4 mr-4">Example Gallery Item</h5>
                      <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="box" >
                      <img src="img/noti3.jpg" class="img-fluid">
                      <h5 class="mt-4 ml-4 mr-4">Example Gallery Item</h5>
                      <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                  </div>
                </div>
            <div class="text-right">
                  <a class="btn btn-secondary" href="#"> Ver Todas </a>
                </div>
              </div>
        </div><!-- fin noticiasFront -->
      <div id="contenidoFront"><!-- contenidoFront -->
        <h3 class="title-front text-center">Juegos</h3>
            <div class="divider"></div>
        <div class="pestanas">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#superpolla" role="tab">Super Polla</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#grandSlam" role="tab">Grand Slam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#batallas" role="tab">Batalla de Escuderías</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#masterSerie" role="tab">Master series del domino</a>
            </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="superpolla" role="tabpanel">
            <h5 class="title-front text-center">Últimas partidas</h5>
                <div class="divider"></div>
                <div id="accordion" role="tablist" aria-multiselectable="true"><!-- inicio accordion -->
                <div class="row">
                  <div class="col">
                    <a data-toggle="collapse" data-parent="#accordion"  href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                      <div class="cuadro1">
                        <img src="img/jugadores.jpg">
                        <h5>15/12/17</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a data-toggle="collapse" data-parent="#accordion"  href="#collapse-2a" aria-expanded="false" aria-controls="collapse-2a">
                      <div class="cuadro1">
                        <img src="img/jugadores.jpg">
                        <h5>15/12/17</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <div class="cuadro1">
                      <img src="img/jugadores.jpg">
                      <h5>15/12/17</h5>
                    </div>
                  </div>
                  <div class="col">
                    <div class="cuadro1">
                      <img src="img/jugadores.jpg">
                      <h5>15/12/17</h5>
                    </div>
                  </div>
                </div>

            <div class="card">
              <div class="collapse" id="collapse-2">
                <ul class="nomLigaUl">
                         <li class="nomJugador">
                           <a data-toggle="collapse" href="#collapse-0" aria-expanded="false" aria-controls="collapse-0">
                             <img class="imgCircle" src="img/avatar-4.jpg"> 
                             <h5>George Ballan</h5>
                             <span>2017 - PTS 22</span>
                           </a>
                         </li>
                         <div class="collapse" id="collapse-0">
                  <div class="fichaConten">
                    <div class="table-responsive">
                                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Categoría</th>
                          <th>J/J</th>
                          <th>J/G</th>
                          <th>J/P</th>
                          <th>PTS +</th>
                          <th>PTS -</th>
                          <th>AVE</th>
                          <th>EFEC</th>
                          <th>PRO</th>
                          <th>ZA</th>
                          <th>PTS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Superpolla</th>
                          <td>123</td>
                          <td>321</td>
                          <td>25</td>
                          <td>12345</td>
                          <td>12345</td>
                          <td>2525</td>
                          <td>25</td>
                          <td>15</td>
                          <td>25</td>
                          <td>45,5</td>
                        </tr>
                        <!-- <tr>
                          <th scope="row">Grand Slam</th>
                          <td>123</td>
                          <td>321</td>
                          <td>25</td>
                          <td>12345</td>
                          <td>12345</td>
                          <td>2525</td>
                          <td>25</td>
                          <td>15</td>
                          <td>25</td>
                          <td>45,5</td>
                        </tr>
                        <tr>
                          <th scope="row">B. de escuderías</th>
                          <td>123</td>
                          <td>321</td>
                          <td>25</td>
                          <td>12345</td>
                          <td>12345</td>
                          <td>2525</td>
                          <td>25</td>
                          <td>15</td>
                          <td>25</td>
                          <td>45,5</td>
                        </tr> -->
                      </tbody>
                    </table>
                    </div>
                  </div>
                   </div>

                         <li class="nomJugador">
                           <a data-toggle="collapse" href="#collapse-0a" aria-expanded="false" aria-controls="collapse-0a">
                             <img class="imgCircle" src="img/avatar-3.jpg"> 
                             <h5>Felipe Alvarez</h5>
                             <span>2017 - PTS 43</span>
                           </a>
                         </li>
                         <div class="collapse" id="collapse-0a">
                  <div class="fichaConten">
                    <div class="table-responsive">
                                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Categoría</th>
                          <th>J/J</th>
                          <th>J/G</th>
                          <th>J/P</th>
                          <th>PTS +</th>
                          <th>PTS -</th>
                          <th>AVE</th>
                          <th>EFEC</th>
                          <th>PRO</th>
                          <th>ZA</th>
                          <th>PTS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Superpolla</th>
                          <td>123</td>
                          <td>321</td>
                          <td>25</td>
                          <td>12345</td>
                          <td>12345</td>
                          <td>2525</td>
                          <td>25</td>
                          <td>15</td>
                          <td>25</td>
                          <td>45,5</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                   </div>
                         <li class="nomJugador">
                           <a href="#">
                             <img class="imgCircle" src="img/avatar-1.jpg"> 
                             <h5>Andrés Mendoza</h5>
                             <span>2017 - PTS 38</span>
                           </a>
                         </li>
                      </ul>
              </div>
            </div>
            <div class="card">
              <div class="collapse" id="collapse-2a">
                <ul class="nomLigaUl">
                         <li class="nomJugador">
                           <a data-toggle="collapse" href="#collapse-0b" aria-expanded="false" aria-controls="collapse-0b">
                             <img class="imgCircle" src="img/avatar-2.jpg"> 
                             <h5>Felipe Alvarez</h5>
                             <span>2017 - PTS 22</span>
                           </a>
                         </li>
                         <div class="collapse" id="collapse-0b">
                  <div class="fichaConten">
                    <div class="table-responsive">
                                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Categoría</th>
                          <th>J/J</th>
                          <th>J/G</th>
                          <th>J/P</th>
                          <th>PTS +</th>
                          <th>PTS -</th>
                          <th>AVE</th>
                          <th>EFEC</th>
                          <th>PRO</th>
                          <th>ZA</th>
                          <th>PTS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Superpolla</th>
                          <td>123</td>
                          <td>321</td>
                          <td>25</td>
                          <td>12345</td>
                          <td>12345</td>
                          <td>2525</td>
                          <td>25</td>
                          <td>15</td>
                          <td>25</td>
                          <td>45,5</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                   </div>

                         <li class="nomJugador">
                           <a href="#">
                             <img class="imgCircle" src="img/avatar-4.jpg"> 
                             <h5>George Ballan</h5>
                             <span>2017 - PTS 43</span>
                           </a>
                         </li>
                         <li class="nomJugador">
                           <a href="#">
                             <img class="imgCircle" src="img/avatar-5.jpg"> 
                             <h5>María Alejandra Mendoza</h5>
                             <span>2017 - PTS 38</span>
                           </a>
                         </li>
                      </ul>
              </div>
            </div>

            <div class="text-right">
                  <a class="btn btn-secondary" href="#"> Ver Todas </a>
                </div>
            </div><!-- fin accordion -->
                <!-- segunda info -->
            <div class="space1">
                  <h5 class="title-front text-center">Ranking Super Polla individual</h5>
                  <div class="divider"></div>
                </div>

                <div class="row text-center">
                  <div class="col">
                    <a data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                      <img class="jugadorInd" src="img/avatar-1.jpg">
                      <div class=""><h6 class="text-truncate2">George Ballan</h6></div>
                    </a>
                  </div>
                  <div class="col">
                    <img class="jugadorInd" src="img/avatar-2.jpg">
                    <div class=""><h6 class="text-truncate2">Felipe Alvarez</h6></div>
                  </div>
                  <div class="col">
                    <img class="jugadorInd" src="img/avatar-3.jpg">
                    <div class=""><h6 class="text-truncate2">Jefferson Varela Freitez</h6></div>
                  </div>
                  <div class="col">
                    <img class="jugadorInd" src="img/avatar-4.jpg">
                    <div class=""><h6 class="text-truncate2">Gihad Elias Husein</h6></div>
                  </div>
                  <div class="col">
                    <img class="jugadorInd" src="img/avatar-5.jpg">
                    <div class=""><h6 class="text-truncate2">María Alejandra Mendoza</h6></div>
                  </div>
                </div>

                <div class="collapse" id="collapse-3">
              <div class="fichaConten">
                  <div class="table-responsive">
                              <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Categoría</th>
                        <th>J/J</th>
                        <th>J/G</th>
                        <th>J/P</th>
                        <th>PTS +</th>
                        <th>PTS -</th>
                        <th>AVE</th>
                        <th>EFEC</th>
                        <th>PRO</th>
                        <th>ZA</th>
                        <th>PTS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Superpolla</th>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>2525</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                      </tr>
                      <tr>
                        <!-- <th scope="row">Grand Slam</th>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>2525</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                                              </tr>
                                              <tr>
                        <th scope="row">B. de escuderías</th>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>2525</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                                              </tr> -->
                    </tbody>
                  </table>
                  </div>
                </div>
            </div>

                <div class="text-right">
                  <a class="btn btn-secondary" href="#"> Ver Todos </a>
                </div>

            </div>
            

            <div class="tab-pane" id="grandSlam" role="tabpanel">
              <h5 class="title-front text-center">Torneos individuales</h5>
                <div class="divider"></div>
            <div class="row text-center">
              <div class="col">
                    <div class="cuadro2">
                      <img src="img/logo-el-tigre.jpg">
                    </div>
                    <h6>1er GRAND SLAM 2017 COPA TIGRE DE CARAYACA</h6>
                  </div>
                  <div class="col">
                    <div class="cuadro2">
                      <img src="img/logo-luso.png">
                    </div>
                    <h6>2do GRAND SLAM 2017 COPA CENTRO LUSO LARENSE</h6>
                  </div>
                  <div class="col">
                    <div class="cuadro2">
                      <img src="img/logo-copa-lara.jpg">
                    </div>
                    <h6>3er GRAND SLAM 2017 COPA ESTADO LARA</h6>
                  </div>
                  <div class="col">
                    <div class="cuadro2">
                      <img src="img/logo-pena.jpg">
                    </div>
                    <h6>4to GRAND SLAM 2017 COPA LA PEÑA DEL DOMINO</h6>
                  </div>
            </div>
            <p align="justify"><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a urna enim. Mauris sodales velit sit amet eros posuere fermentum. Morbi ut dui suscipit, semper libero nec, luctus orci. Nam tristique est ac lobortis ornare. In sagittis posuere luctus. In egestas tempor mauris. Sed a erat in lorem fermentum rhoncus. Vestibulum rhoncus massa in faucibus rhoncus. Cras eu libero sollicitudin libero euismod mollis eu et elit. Suspendisse potenti. Aliquam erat volutpat.</p>
            </div>
            <div class="tab-pane" id="batallas" role="tabpanel">
            <h5 class="title-front text-center">Batalla de escuderías</h5>
                <div class="divider"></div>
                <p align="justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a urna enim. Mauris sodales velit sit amet eros posuere fermentum. Morbi ut dui suscipit, semper libero nec, luctus orci. Nam tristique est ac lobortis ornare. In sagittis posuere luctus. In egestas tempor mauris. Sed a erat in lorem fermentum rhoncus. Vestibulum rhoncus massa in faucibus rhoncus. Cras eu libero sollicitudin libero euismod mollis eu et elit. Suspendisse potenti. Aliquam erat volutpat.
            </p>
                <div class="table-responsive">
                              <table class="table table-striped">
                    
                      <tr>
                        <td rowspan="2"><img class="escuderiaLogo" src="img/logo-pena.jpg"></td>
                        <th>J/J</th>
                        <th>J/G</th>
                        <th>J/P</th>
                        <th>PTS +</th>
                        <th>PTS -</th>
                        <th>PTS +%</th>
                        <th>PTS -%</th>
                        <th>PROM</th>
                        <th>EFEC</th>
                        <th>CH</th>
                        <th>ZA</th>
                        <th>PTS</th>
                      </tr>
                    
                      <tr>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>45,5</td>
                        <td>2525</td>
                        <td>45,5</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                      </tr>
                    
                  </table>
                </div>

                <div class="table-responsive">
                              <table class="table table-striped">
                    
                      <tr>
                        <td rowspan="2"><img class="escuderiaLogo" src="img/logo-luso.png"></td>
                        <th>J/J</th>
                        <th>J/G</th>
                        <th>J/P</th>
                        <th>PTS +</th>
                        <th>PTS -</th>
                        <th>PTS +%</th>
                        <th>PTS -%</th>
                        <th>PROM</th>
                        <th>EFEC</th>
                        <th>CH</th>
                        <th>ZA</th>
                        <th>PTS</th>
                      </tr>
                    
                      <tr>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>45,5</td>
                        <td>2525</td>
                        <td>45,5</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                      </tr>
                    
                  </table>
                </div>

                <div class="table-responsive">
                              <table class="table table-striped">
                    
                      <tr>
                        <td rowspan="2"><img class="escuderiaLogo" src="img/logo-el-tigre.jpg"></td>
                        <th>J/J</th>
                        <th>J/G</th>
                        <th>J/P</th>
                        <th>PTS +</th>
                        <th>PTS -</th>
                        <th>PTS +%</th>
                        <th>PTS -%</th>
                        <th>PROM</th>
                        <th>EFEC</th>
                        <th>CH</th>
                        <th>ZA</th>
                        <th>PTS</th>
                      </tr>
                    
                      <tr>
                        <td>123</td>
                        <td>321</td>
                        <td>25</td>
                        <td>12345</td>
                        <td>12345</td>
                        <td>45,5</td>
                        <td>2525</td>
                        <td>45,5</td>
                        <td>25</td>
                        <td>15</td>
                        <td>25</td>
                        <td>45,5</td>
                      </tr>
                    
                  </table>
                </div>


            </div>
            <div class="tab-pane" id="masterSerie" role="tabpanel">
            <h5 class="title-front text-center">Master series del domino</h5>
                <div class="divider"></div>
                <p align="justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a urna enim. Mauris sodales velit sit amet eros posuere fermentum. Morbi ut dui suscipit, semper libero nec, luctus orci. Nam tristique est ac lobortis ornare. In sagittis posuere luctus. In egestas tempor mauris. Sed a erat in lorem fermentum rhoncus. Vestibulum rhoncus massa in faucibus rhoncus. Cras eu libero sollicitudin libero euismod mollis eu et elit. Suspendisse potenti. Aliquam erat volutpat.
            </p>
            </div>

          </div>

        </div>


      </div><!-- fin contenidoFront -->
      <div id="contactoFront"><!-- contactoFront -->
        <h3 class="title-front text-center">Contáctanos</h3>
            <div class="divider"></div>

        <div class="container">
          <div class="row contact-details">
            <div class="col-sm-8 text-center text-md-left mb-4">
              <h4>Enivianos tu solicitud</h4>
              <form class="contact-form mt-4">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-4" placeholder="Nombres" value="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-4" placeholder="Correo" value="">
                  </div>
                  <br />
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3">Mensaje</textarea><br />
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div> 
                </div>
              </form>
            </div>
            <div class="col-sm-4 text-center text-md-left">
              <h4>Info. de Contactos</h4>
              <h5>Correo</h5>
              <p>info@penadeldomino.com</p>
              <h5>Teléfono</h5>
              <p>+58 251 234 567 89</p>
              <h5>Dirección</h5>
              <p>Av. la mata calle 8, Cabudare, Lara - Venezuela</p>
              <ul class="social mb-4">
                <li><a href="#" title="Facebook" class="fa fa-facebook"></a></li>
                <li><a href="#" title="Twitter" class="fa fa-twitter"></a></li>
                <li><a href="#" title="Google+" class="fa fa-google"></a></li>
                <li><a href="#" title="Instagram" class="fa fa-instagram"></a></li>
                <div class="clear"></div>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- fin contactoFront -->
                
              </div>
        </div>
        
      </div><!-- row -->
    </div><!-- container-fluid -->
</section><!-- fin subContent -->

@endsection