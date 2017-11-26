<section>
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary box-gris">

                <div class="box-header with-border my-box-header">
                    <h3 class="box-title"><strong>Editar Informacion de la liga</strong></h3>
                </div><!-- /.box-header -->
                <hr style="border-color:white;"/>
                <div id="notificacion_E2"></div>
                <div class="box-body">

                    <form action="{{ url('editar_league') }}" method="post" id="f_editar_league" class="formentrada">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        {{--<input type="hidden" name="id_league" value="{{ $leagues->id }}">
                        <input type="hidden" name="id_user" value="{{ $user->id }}">--}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-2" for="title">Titulo*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="" required>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-2" for="description">Descripcion*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="description" name="description" value=""
                                           required>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                        <br>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_news" class="col-sm-2">Agregar Imagen de la noticia*</label>
                                <div class="col-sm-12">
                                    <input name="image_news" id="image_news" type="file" class="archivo"
                                           required/>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="form-group col-sm-12">

                                <img src="img/photo4.jpg" alt="Noticia Imagen" style="width:300px;height:300px;"
                                     id="imagen_noticia">
                                <!-- User image -->
                            </div>
                        </div><!-- /.col -->

                        <div class="box-footer col-xs-12 box-gris ">
                            <button type="submit" class="btn btn-primary">Agregar Noticias</button>
                        </div>

                    </form>
                </div>

            </div><!-- /.box box-primary box-gris -->

        </div>
    </div>
</section>