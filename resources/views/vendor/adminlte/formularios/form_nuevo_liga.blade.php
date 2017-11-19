<section class="content">

    <div class="col-md-12">

        <div class="box box-primary  box-gris">

            <div class="box-header with-border my-box-header">
                <h3 class="box-title"><strong>Nueva Liga</strong></h3>
            </div><!-- /.box-header -->
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="box-body">

                <h4>Informacion de la liga</h4>

                <hr style="border-color:white;"/>

                <form action="{{ url('crear_liga') }}" method="post" id="f_crear_liga" class="formentrada">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="name_league">Nombre*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_league" name="name_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="description_league">Descripción*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description_league" name="description_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="state_league">Estado*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="state_league" name="state_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="city_league">Ciudad*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city_league" name="city_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="address_league">Direccion*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address_league" name="address_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="name_admin">Admin*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_admin" name="name_admin" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="email_league">Email*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email_league" name="email_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="phone">Teléfono*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_league" name="phone_league" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->


                    <div class="subtitle1 col-md-12">
                        <h4>Informacion de Usuario Administrador</h4>
                        <hr style="border-color:white;"/>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="name">Nombre*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="apellido">Apellidos*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="phone">Teléfono*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="email">Email*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
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

                    <div class="box-footer col-xs-12 box-gris ">
                        <button type="submit" class="btn btn-primary">Crear Nueva Liga</button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</section>

