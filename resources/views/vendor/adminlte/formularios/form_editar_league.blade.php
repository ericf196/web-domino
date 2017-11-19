
<section >
  <div class="row" >
    <div class="col-md-12">

  <div class="box box-primary box-gris">

    <div class="box-header with-border my-box-header">
      <h3 class="box-title"><strong>Editar Informacion de la liga</strong></h3>
    </div><!-- /.box-header -->
    <hr style="border-color:white;" />
      <div id="notificacion_E2"></div>
    <div class="box-body">
              
      <form action="{{ url('editar_league') }}" method="post" id="f_editar_league" class="formentrada">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_league" value="{{ $leagues->id }}"> 
          <input type="hidden" name="id_user" value="{{ $user->id }}">

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="name_league">Nombre*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="name_league" name="name_league"  value="{{ $leagues->name_league }}" required>
                </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->
          
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="description_league">Descripción*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="description_league" name="description_league" value="{{ $leagues->description }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="state_league">Estado*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="state_league" name="state_league" value="{{ $leagues->state }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="city_league">Ciudad*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control"  id="city_league" name="city_league" value="{{ $leagues->city }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="address_league">Direccion*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="address_league" name="address_league" value="{{ $leagues->address }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="name_admin">Admin*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="name_admin" name="name_admin" value="{{ $leagues->name_admin }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="email_league">Email*</label>
                <div class="col-sm-10" >
                  <input type="email" class="form-control" id="email_league" name="email_league" value="{{ $leagues->email }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-sm-2" for="phone_league">Teléfono*</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="phone_league" name="phone_league" value="{{ $leagues->state }}" required >
              </div>
            </div><!-- /.form-group -->
          </div><!-- /.col -->


          <div class="subtitle1 col-md-12">
              <h4>Informacion de Usuario Administrador</h4>
              <hr style="border-color:white;"/>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="nombres">Nombre*</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $user->nombres }}" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="apellidos">Apellidos*</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="apellidos" name="apellidos"  value="{{ $user->apellidos }}" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="phone">Teléfono*</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->telefono }}" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="email">Email*</label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="password">Password*</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                  <label class="col-sm-2" for="password_confirmation">Confirmar Password*</label>
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                  </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="box-footer col-xs-12 box-gris ">
            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
          </div>

      </form>                   
    </div>
                    
  </div><!-- /.box box-primary box-gris -->

 
    </div>                     
  </div>
</section>