<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- config('app.name', 'Lucalza') --}}
                <img src="{{ asset('images/Logotipo-Quetzalito-s.png') }}" alt="" width="175" style="position:relative; top:-20px; left: -60px; ">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                    {{--<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogos <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">Proveedores</a></li>
                        <li><a href="#">Tipo de Gasto</a></li>
                        <li><a href="#">Rutas</a></li>
                        <li><a href="#">Usuarios</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>--}}
                    <li class=""><a href="{{ route('contracts') }}"><img src="{{ asset('images/revisarInfoCredito.png') }}" alt=""> Revisión Créditos</a></li>
                    <li class=""><a href="#"><img src="{{ asset('images/aprobarCredito.png') }}" alt=""> Aprobación Créditos</a></li>
                    <li class=""><a href="#"><img src="{{ asset('images/desembolsoyTrans.png') }}" alt=""> Desembolsos y Transferencias</a></li>
                    <li class=""><a href="#"><img src="{{ asset('images/abogado.png') }}" alt=""> Sender</a></li>
                    <li class=""><a href="{{ route('credits.index') }}"><img src="{{ asset('images/admon.png') }}" alt=""></a></li>
                    <li class="">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/cerrarSesion.png') }}" alt=""></a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                    {{--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>--}}
                @endif
            </ul>
        </div>
    </div>
</nav>
