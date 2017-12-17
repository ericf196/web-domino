<section>
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary box-gris">

                <div class="box-header with-border my-box-header">
                    <h3 class="box-title"><strong>Editar Informacion de la liga</strong></h3>
                </div><!-- /.box-header -->
                <hr style="border-color:white;"/>
                <div id="notificacion_nuevo_noticia"></div>
                <div class="box-body">

                    <form action="{{ url('nuevo_noticia') }}" method="post" id="f_nuevo_noticia"
                          class="formentrada_noticias_liga"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

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
                                    <textarea rows="10" class="form-control" id="description" name="description"
                                              value="" required></textarea>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <img src="img/avatar.jpg" alt="Notice Image"
                                     style="width:160px;height:160px;"
                                     id="fotografia_noticia">
                            </div>

                            <label for="image_news">Agregar Imagen de la noticia*</label>
                            <input name="image_news" id="image_news" type="file" class="archivo form-control"
                                   onchange="document.getElementById('fotografia_noticia').src = window.URL.createObjectURL(this.files[0])"
                                   required/><br/><br/>
                        </div><!-- /.col -->

                        <div class="box-footer col-xs-12 box-gris ">
                            <button id="submit_noticias_crear" type="submit" class="btn btn-primary">Agregar Noticias
                            </button>
                        </div>

                    </form>
                </div>

            </div><!-- /.box box-primary box-gris -->

        </div>
    </div>
</section>