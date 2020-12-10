@extends('layouts.app')
@section('name', 'Detalles de Peliculas')
@section('content')
   
<div class="card mb-3 bg-light" style="max-width: 900px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('img/4.jpg') }}" class="card-img" width="200px" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
      <h5 class="card-title">{{ $movie->name }}</h5>
      <p class="card-text">Sinopsis: {{ $movie->synopsis }}, 
        <br> Categoria: {{ $movie->category }}, 
        <br> Director: {{ $movie->director }}, 
        <br> Duración: {{ $movie->duration }}hrs.,
        <br> Actor: {{ $movie->actors }}, 
        <br> Genero: {{ $movie->gender }}
    </p>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
        <a href="{{ route('movies.index', $movie->id) }}" class="btn btn-primary">Volver</a>
        <a href="{{ route('movies.edit', $movie->id) }}"class="btn btn-primary">Editar</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
</div>
</div>
</div>


@endsection