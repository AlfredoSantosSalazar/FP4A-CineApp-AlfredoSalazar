@extends('layouts.app')
@section('name', 'EditarSala')
@section('content')

<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para editar la Sala</h1></div>
        <div class="col-sm-2">
            <a href="{{route("room.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

<div class="jumbotron">
<form method="post" action="{{route('room.update', $room->id)}}">
    @csrf
    @method('PUT')

<div>
     <label for="Pelicula"> Silla: </label>
<input class="form-control"  value="{{ $room->chairs }}" type="text" name="chairs"  id=""  maxlength="" minlength="">
</div>

<div>
     <label> Localizacion: </label>
<textarea class="form-control"value=" {{ $room->location }}" name="location"  id=""   cols="30"  minlength=""  rows=""> </textarea>
</div>
<div>
    <label> Capacidad: </label>
<textarea class="form-control"value=" {{ $room->capacy }}" name="capacy"  id=""   cols="30"  minlength=""  rows=""></textarea>
</div>

    <input class="btn btn-primary" type="submit"  value="Actualizar">
</form>
</div>
@endsection
