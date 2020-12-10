@extends('layouts.app')
@section('name', 'Detalles de Peliculas')
@section('content')

<div class="col-sm-10"><h1>Funciones</h1></div>
   
<div class="card mb-3 bg-light" style="max-width: 900px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('img/6.jpg') }}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">La casa de Papel</h5>
            <br> Inicio: {{ $function->start }}
            <br> Fin: {{ $function->end }}
            <br> Disponible: {{ $function->available }} Lugares
            <br> Horario: {{ $function->type }}
    </p>
        <form action="{{ route('functions.destroy', $function->id) }}" method="post">
        <a href="{{ route('functions.index', $function->id) }}" class="btn btn-primary">Volver</a>
        <a href="{{ route('functions.edit', $function->id) }}"class="btn btn-primary">Editar</a>
        <a href="{{ route('functions.edit', $function->id) }}"class="btn btn-primary">Comprar</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
</div>
</div>
</div>


@endsection