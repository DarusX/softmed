{{--


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
                <i class="fas fa-h-square"></i> {{ config('app.name', 'SoftMed') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            @auth
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Catálogos
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('enfermedad.index')}}">Enfermedades</a>
                        </li>
                        <li>
                            <a href="{{route('estudio.index')}}">Estudios</a>
                        </li>
                        <li>
                            <a href="{{route('medicamento.index')}}">Medicamentos</a>
                        </li>
                        <li>
                            <a href="{{route('usuario.index')}}">Usuarios</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-calendar"></i>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="{{route('busqueda')}}">
                <div class="form-group">
                    <input type="text" class="form-control" name='nombre' placeholder="Paciente">
                </div>
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            @endauth

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li>
                    <a href="{{ route('login') }}">Entrar</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Registrarse</a>
                </li>
                @endguest @auth
                <li>
                    <a href="/home">
                        <i class="fas fa-tv"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="" class="logout">Salir</a>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
--}}

<header class="header">
    <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
            <button class="dismiss">
                <i class="icon-close"></i>
            </button>
            <form id="searchForm" action="{{route('busqueda')}}" role="search">
                <input type="text" name="nombre" placeholder="Paciente" class="form-control">
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <!-- Navbar Brand -->
                    <a href="/" class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block">
                                <i class="fas fa-h-square"></i> SoftMed
                        </div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none">
                            <strong>BD</strong>
                        </div>
                    </a>
                    <!-- Toggle Button-->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center">
                        <a id="search" href="#">
                            <i class="icon-search"></i>
                        </a>
                    </li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown">
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-red badge-corner">12</span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                        <div class="notification-time">
                                            <small>10 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>view all notifications </strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Messages                        -->
                    <li class="nav-item dropdown">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-orange badge-corner">10</span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="{{asset('theme/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Jason Doe</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="{{asset('theme/img/avatar-2.jpg')}}" alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Frank Williams</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="{{asset('theme/img/avatar-3.jpg')}}" alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Ashley Wood</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>Read all messages </strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Languages dropdown    -->
                    <li class="nav-item dropdown">
                        <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link language dropdown-toggle">
                            <img src="{{asset('theme/img/flags/16/GB.png')}}" alt="English">
                            <span class="d-none d-sm-inline-block">English</span>
                        </a>
                        <ul aria-labelledby="languages" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <img src="{{asset('theme/img/flags/16/DE.png')}}" alt="English" class="mr-2">German</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <img src="{{asset('theme/img/flags/16/FR.png')}}" alt="English" class="mr-2">French </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Logout    -->
                    <li class="nav-item">
                        <a href="#" class="nav-link logout">
                            <span class="d-none d-sm-inline">Salir</span>
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>