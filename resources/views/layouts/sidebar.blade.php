<nav class="side-navbar">
<!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('theme/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h4">{{Auth::user()->name}}</h1>
            <p>{{Auth::user()->role->role}}</p>
        </div>
    </div>
<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    @if(Auth::user()->role_id == 1)
    <ul class="list-unstyled">
        <li><a href="/"> <i class="icon-home"></i>Inicio </a></li>
        
        
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Catálogos</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{route('consulta.index')}}"> <i class="icon-grid"></i>Consultas </a></li>
                <li><a href="{{route('enfermedad.index')}}"> <i class="icon-grid"></i>Enfermedades </a></li>
                <li><a href="{{route('estudio.index')}}"> <i class="icon-grid"></i>Estudios </a></li>
                <li><a href="{{route('medicamento.index')}}"> <i class="icon-grid"></i>Medicamentos </a></li>
                <li><a href="{{route('nota.index')}}"> <i class="icon-grid"></i>Notas </a></li>
                <li><a href="{{route('paciente.index')}}"> <i class="icon-grid"></i>Pacientes </a></li>
                <li><a href="{{route('receta.index')}}"> <i class="icon-grid"></i>Recetas </a></li>
                <li><a href="{{route('usuario.index')}}"> <i class="icon-grid"></i>Usuarios </a></li>

            </ul>
        </li>
    <li><a href="{{route('scheduler.index')}}"> <i class="icon-interface-windows"></i>Planificador </a></li>
    </ul>
    @endif
    
    <span class="heading">Extras</span>
    <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
    </ul>
</nav>