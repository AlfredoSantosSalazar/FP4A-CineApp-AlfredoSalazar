@extends('layouts.app')
@section('name', 'Funciones')
@section('content')


<div class="container">
<br>
<div class="row">
    <div class="col-sm-10"><h1>Funciones</h1></div>
     <div class="col-sm-2">
      <a href="{{ route("functions.create")}}">
        <button clas="btn btn-secundary">Agregar</button>
    </a>
</div> 
</div>

@forelse($functions as $function) 

<div class="card mb-3 bg-light" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('img/6.jpg') }}" class="card-img" width="200px" alt="">
                   </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{ $function->nombre }}</h5>
        <br> Inicio: {{ $function->start }}
        <br> Fin: {{ $function->end }}
        <br> Disponible: {{ $function->available }} Lugares
        <br> Horario: {{ $function->type }}
    </p>
    
        <form action="{{ route('functions.destroy', $function->id) }}" method="post">
        <a href="{{ route('functions.show', $function->id) }}" class="btn btn-primary">Ver</a>
        <a href="{{ route('functions.edit', $function->id) }}"class="btn btn-primary">Editar</a>
                <a href="{{ route('entrances.index', $function->id) }}"class="btn btn-primary">Comprar</a>
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

@endsection
     </div>
   </div>
  </div>
</div>





