<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"> </li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @role('administrador')
            <li class="treeview">
                <a href="#"><i class='fa fa-trophy'></i> <span>Ligas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('listado_usuarios') }}">Crear Ligas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-window-restore'></i> <span>Sesiones</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/') }}">Top</a></li>
                    <li><a href="{{ url('/') }}">Empresa</a></li>
                    <li><a href="{{ url('/') }}">Posiciones</a></li>
                    <li><a href="{{ url('/') }}">Noticias</a></li>
                    <li><a href="{{ url('/') }}">Suscribir</a></li>
                    <li><a href="{{ url('/') }}">Pie de página</a></li>
                </ul>
            </li>
            @endrole
            <li><a href="{{ url('/') }}"><i class='fa fa-user'></i> <span>Perfil</span></a></li>
            @role('admin_liga')
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Jugador</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('listado_usuarios') }}">Crear Jugador</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-sign-language'></i> <span>Juegos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/') }}">Superpolla</a></li>
                    <li><a href="{{ url('/') }}">Grand Slam</a></li>
                    <li><a href="{{ url('/') }}">Batallas entre escuderías</a></li>
                </ul>
            </li>
            @endrole
            {{-- @role('administrador')
            @endrole --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
