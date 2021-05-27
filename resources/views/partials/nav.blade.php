<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('inicio')}}">
            <img src="/img/LogoDK.png" width="35" alt="Logo DigitalKoder">
            {{config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" ria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills flex-column flex-sm-row ml-auto">
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center {{ setActive('inicio') }}" href="{{route('inicio')}}">Inicio</a></li>
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center {{ setActive('nosotros') }}"
                        href="{{route('nosotros')}}">Nosotros</a></li>
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center {{ setActive('proyectos.*') }}" a class="nav-link"
                        href="{{route('proyectos.index')}}">Proyectos</a></li>
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center {{ setActive('contacto') }}"
                        href="{{route('contacto')}}">Contacto</a></li>
                @auth
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Cerrar sesión</a>
                </li>
                @else
                <li class="nav-item flex-sm-fill">
                    <a class="nav-link text-center {{ setActive('login') }}" href="{{route('login')}}">Login</a>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>