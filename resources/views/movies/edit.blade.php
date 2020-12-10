@extends('layouts.app')
@section('name', 'EditarPelicula')
@section('content')

<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para editar una pelicula</h1></div>
        <div class="col-sm-2">
            <a href="{{route("movies.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

<div class="jumbotron">
<form method="post" action="{{route('movies.update', $movie->id)}}">
    @csrf
    @method('PUT')

<div>
     <label for="Pelicula"> Pelicula: </label>
<input class="form-control"  value="{{ $movie->name }}" type="text" name="name"  id=""  maxlength="250" minlength="2" required>
</div>

<div>
     <label> Sinopsis: </label>
<textarea class="form-control"value=" {{ $movie->synopsis }}" name="synopsis"  id=""   cols="30"  minlength="5"  rows="3"> {{$movie->synopsis}}</textarea>
</div>

<div>
    <label> Categoria: </label>
    <select class="form-control" name="category" id="">
        <option value="{{ $movie->category }}">{{ $movie->category }}</option>
    <option value="Estrenos">Estrenos</option>
    <option value="Trilogias">Trilogias</option>
    <option value="Tendencias">Tendencias</option>
</select>
    </div>

    <div>
        <label for=""> Director: </label>
            <input class="form-control"  value="{{ $movie->director }}"  type="text"  name="director"   id=""  required>
    </div>

    <div>
        <label for=""> Duracion en horas: </label>
    <input class="form-control"  value="{{ $movie->duration }}" type="text"  name="duration"  id="">
    </div>

    <div>
        <label for=""> Actores: </label>
    <textarea class="form-control" name="actors"  id=""   cols="30"   rows="3">{{$movie->actors}} </textarea>
    </div>

    <div>
        <label for=""> Genero: </label>
        <select class="form-control" required name="gender" id=""> 
            <option value="{{ $movie->gender }}">{{ $movie->gender }}</option>
        <option value="Terror">Terror</option>  
        <option value="Accion">Accion</option>
        <option value="Fantasia">Fantasia</option>
        </select>
    </div>
<br>
    <input class="btn btn-primary" type="submit"  value="Actualizar">
</form>
</div>
@endsection