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
                        <li><a href="{{route('enfermedad.index')}}">Enfermedades</a></li>
                        <li><a href="{{route('estudio.index')}}">Estudios</a></li>
                        <li><a href="{{route('medicamento.index')}}">Medicamentos</a></li>
                        <li><a href="{{route('usuario.index')}}">Usuarios</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fas fa-calendar"></i></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" placeholder="Paciente" >
                </div>
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
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
                @endguest
                @auth
                <li><a href="/home"><i class="fas fa-tv"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="" class="logout">Salir</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
    <script>
$(document).ready(function()
{
   $("#search").keyup(function(){
       var str=  $("#search").val(); {
               $.get( "{{ url('paciente/search?nombre=') }}"+str, function( data ) {
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 
</script>

</nav>