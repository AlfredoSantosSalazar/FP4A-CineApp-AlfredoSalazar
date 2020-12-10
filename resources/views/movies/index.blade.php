@extends('layouts.app')
@section('name', 'Peliculas')
@section('content')

<div class="container">
<br>
<div class="row">
    <div class="col-sm-10"><h1>Peliculas</h1></div>
     <div class="col-sm-2">
      <a href="{{ route("movies.create")}}">
        <button clas="btn btn-secundary">Agregar</button>
    </a>
</div> 
</div>

@forelse($movies as $movie) 
  
<div class="card mb-3 bg-light" style="max-width: 600px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('img/4.jpg') }}" class="card-img" width="200px" alt="">
                   </div>
      <div class="col-md-8">
        <div class="card-body">
      <h5 class="card-title">{{ $movie->name }}</h5>
      <p class="card-text">Sinopsis: {{ $movie->synopsis }}.
        <br> Categoria: {{ $movie->category }}.
        <br> Director: {{ $movie->director }}.
        <br> Duración: {{ $movie->duration }}hrs.
        <br> Actor: {{ $movie->actors }}.
        <br> Genero: {{ $movie->gender }}
    </p>
    
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Ver</a>
        <a href="{{ route('movies.edit', $movie->id) }}"class="btn btn-primary">Editar</a>
        <a href="{{ route('entrances.index', $movie->id) }}"class="btn btn-primary">Comprar</a>

@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@empty
    <h1>No existen datos en la base</h1>
@endforelse
{{ $movies->links() }}
@endsection
     </div>
   </div>
  </div>
</div>


