@extends('plantilla')

@section('titulo', 'Portafolio | ' . $project->title)

@section('contenido')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1>{{$project->title}}</h1>
        <p class="text-secondary">
            {{$project->description}}
        </p>
        <p class="text-black-50">
            {{$project->created_at->diffForHumans()}}
        </p>

        <div class="d-flex justify-content-between align-items-center">
            <a 
                href="{{route('proyectos.index')}}">Regresar
            </a>
            @auth
            <div class="btn-group btn-group-sm">
                <a class="btn btn-primary"
                    href="{{route('proyectos.edit', $project)}}">Editar
                </a>
                <a class="btn btn-danger"
                    href="#" onclick="document.getElementById('delete-project').submit()">Eliminar
                </a>
            </div>
                
                <form class="d-none"
                    id="delete-project"
                    action="{{route('proyectos.destroy', $project)}}" method="post">
                    @csrf @method('DELETE')
                </form>
            @endauth
        </div>

    </div>
</div>
@endsection