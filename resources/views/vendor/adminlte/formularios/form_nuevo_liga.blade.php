<section class="content">

    <div class="col-md-12">

        <div class="box box-primary  box-gris">

            <div class="box-header with-border my-box-header">
                <h3 class="box-title"><strong>Nueva Liga</strong></h3>
            </div><!-- /.box-header -->
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <hr style="border-color:white;"/>

            <div class="box-body">

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
                            <label class="col-sm-2" for="description">Descripciòn*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description" required >
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="state">Estado*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="city">Ciudad*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="address">Direccion*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" required>
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
                            <label class="col-sm-2" for="email">Email*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2" for="phone">Telefono*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" required>
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

