@extends('layouts.app')

@section('name', 'Agregar pelicula')

@section('content')
<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para registrar nueva pelicula</h1></div>
        <div class="col-sm-2">
            <a href="{{ route("movies.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


<div class="jumbotron">

<form method="post" action="{{ route('movies.store')}}">
    @csrf
<div>
     <label for="Pelicula"> Pelicula: </label>
     <input class="form-control" placeholder="Ingrese el nombre de la pelicula" type="text" name="name"  id=""  maxlength="250" minlength="2" required>
</div>

<div>
     <label>Sinopsis:</label>
     <textarea class="form-control" placeholder="Agregue la sinopsis" name="synopsis"  id=""   cols="30"  minlength="5"  rows="3"></textarea>
</div>

<div>
    <label>Categoria:</label>
<select class="form-control" name="category" id="">
    <option value="">Elija una categoria</option>
    <option value="Estrenos">Estrenos</option>
    <option value="Trilogias">Trilogias</option>
    <option value="Tendencias">Tendencias</option>
</select>
    </div>

    <div>
        <label for="">Director:</label>
            <input class="form-control" placeholder="Agregue el director" type="text"  name="director"   id=""  required>
    </div>

    <div>
        <label for="">Duracion en horas:</label>
        <input class="form-control" placeholder="Agregue la duracion" type="text"  name="duration"  id="">
    </div>

    <div>
        <label for="">Actores:</label>
    <textarea class="form-control" placeholder="Agregue los actores" name="actors"  id=""   cols="30"   rows="3"></textarea>
    </div>

    <div>
        <label for="">Genero:</label>
        <select class="form-control" required name="gender" id="">
        <option value="">Seleccionar un genero</option>    
        <option value="Terror">Terror</option>  
        <option value="Accion">Accion</option>
        <option value="Fantasia">Fantasia</option>
        </select>
    </div>



<br>
    <input class="btn btn-primary" type="submit"  value="Guardar">

</form>
</div>
@endsection