@extends('plantilla')

@section('titulo', 'Portafolio')

@section('contenido')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">Portafolio</h1>

        @auth
        <a class="btn btn-primary" href="{{ route('proyectos.create') }}">Nuevo Proyecto</a>
        @endauth
    </div>
    <hr>
    <p class="lead text-secondary">
        Proyectos realizados como prueba para esta implementación Lorem, ipsum dolor sit amet consectetur adipisicing
        elit. Sed, provident odit. Aperiam quisquam dolorum, eveniet odio cumque dolorem iure enim placeat dicta ducimus
        totam harum.
    </p>
    <ul class="list-group">
        @forelse ($projects as $project)
        <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="text-secondary d-flex justify-content-between align-items-center"
                href="{{ route('proyectos.show', $project)}}">
                <span class="font-weight-bold">
                    {{$project->title}}
                </span>
                <span class="text-black-50">
                    {{$project->created_at->format('d/m/Y')}}
                </span>
            </a>
        </li>
        @empty
        <li class="list-group-item border-0 mb-3 shadow-sm">
            No hay proyectos para mostrar
        </li>

        @endforelse
        {{$projects->links()}}
    </ul>

    @endsection