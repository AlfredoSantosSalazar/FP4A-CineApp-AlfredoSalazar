@extends('layouts.app')
@section('name', 'EditarFuncion')
@section('content')

<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para editar la Entrada</div>
        <div class="col-sm-2">
            <a href="{{route("entrances.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

<div class="jumbotron">
<form method="post" action="{{route('entrances.update', $entrance->id)}}">
    @csrf
    @method('PUT')

    <div class="col-md">
        <label for="">Nombre:</label>
        <input value="{{ $entrance->name }}" class="form-control" type="text" name="name" id="">
    </div>
    <div class="col-md">
        <label for="">Sala:</label>
        <input value="{{ $entrance->sala }}" class="form-control" type="text" name="sala" id="">
    </div>
    <div class="col-md">
        <label for="">Precio:</label>
        <input value="{{ $entrance->prince }}" class="form-control" type="number" name="prince" id="">
    </div>
    <div class="col-md">
        <label for="">Hora:</label>
        <input value="{{ $entrance->hourEntrances }}" class="form-control" type="text" name="hourEntrance" id="">
    </div>

    <input class="btn btn-primary" type="submit"  value="Actualizar">
</form>
</div>
@endsection
