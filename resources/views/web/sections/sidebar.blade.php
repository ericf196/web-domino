          <div class="card">
            <div class="card-header">
              <h5 class="text-center">Información de la liga</h5>
            </div>
            <div class="card-block">
              <p class="text-center"><img class="logoLigaUser img-fluid" src="{{ asset($league->url_logo)}}" /></p>
              <p>
                Nombre: <strong>{{$league->name_league}}</strong><br>
                Ubicación: <strong>{{strtolower($league->city)}}, {{strtolower($league->state)}} - Venezuela</strong><br>
                Integrantes: <strong>{{count($league->players)}}</strong><br>
              </p>
              <p><img src="{{asset('img/imgAnun.jpg')}}" class="img-fluid" alt=""></p>
              <p><img src="{{asset('img/imgAnun.jpg')}}" class="img-fluid" alt=""></p>
              <p><img src="{{asset('img/imgAnun.jpg')}}" class="img-fluid" alt=""></p>
              <p><img src="{{asset('img/imgAnun.jpg')}}" class="img-fluid" alt=""></p>
             </div>
          </div>