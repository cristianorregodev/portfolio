@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            
            @include('partials.sesion-status')
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('mensaje.store') }}">
                @csrf
                <h1 class="display-4">Contacto</h1>
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('nombre') is-invalid @else border-0 @enderror"
                        id="name"
                        type="text" 
                        name="nombre" 
                        placeholder="Tu nombre" 
                        value="{{ old('nombre') }}">
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control bg-light shadow-sm @error('correo') is-invalid @else border-0 @enderror"
                        id="email" 
                        type="email" 
                        name="correo" 
                        placeholder="Tu correo" 
                        value="{{ old('correo') }}">
                        @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>
        
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('asunto') is-invalid @else border-0 @enderror"
                        id="subject" 
                        type="text" 
                        name="asunto" 
                        placeholder="Asunto...">{{ old('asunto') }}
                        @error('asunto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>
        
                <div class="form-group">
                    <label for="message">Contenido</label>
                    <textarea class="form-control bg-light shadow-sm @error('asunto') is-invalid @else border-0 @enderror"
                        id="message"
                        name="contenido" 
                        placeholder="Escribe tu mensaje">{{ old('contenido') }}</textarea>
                    @error('contenido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
        
                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>

</div>

@endsection