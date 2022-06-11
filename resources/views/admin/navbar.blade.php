<ul class="navbar-nav mr-auto">
    @guest
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Guias <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/admin/guias') }}">por Generar</a>
            <a class="dropdown-item" href="{{ url('/admin/guias?generadas=true') }}">Generadas</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Manifiestos <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/admin/generar-manifiestos') }}">por Generar</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Configuración <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{ url('/security/users') }}">Usuarios</a>
        </div>
    </li>
    @endguest

@if (false)
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/guias') }}">Guias por Generar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/guias') }}">Guias Generadas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/guias') }}">Generar Manifiestos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/guias') }}">Listado de manifiestos</a>
    </li>     
@endif
</ul>