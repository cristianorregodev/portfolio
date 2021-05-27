@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita illum esse officiis doloremque molestiae pariatur quis, ab iure eum modi reiciendis similique velit sunt cumque deleniti illo ut, vero natus.</p>
            <a class="btn btn-lg btn-block btn-primary" 
                href="{{route('contacto')}}">Contáctame
            </a>
            <a class="btn btn-lg btn-block btn-outline-primary" 
                href="{{route('proyectos.index')}}">Portafolio
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/inicio.svg" alt="Desarrollo Web">
        </div>
    </div>
</div>

    
@endsection