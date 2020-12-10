@extends('layouts.app')
@section('name', 'EditarFuncion')
@section('content')

<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para editar la Función</h1></div>
        <div class="col-sm-2">
            <a href="{{route("functions.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

<div class="jumbotron">
<form method="post" action="{{route('functions.update', $function->id)}}">
    @csrf
    @method('PUT')

    <div class="col-md">
        <label for="">Nombre:</label>
        <input value="{{ $function->nombre }}" class="form-control" type="text" name="nombre" id="">
    </div>
    <div class="col-md">
        <label for="">Inicio:</label>
        <input value="{{ $function->start }}" class="form-control" type="text" name="start" id="">
    </div>
    <div class="col-md">
        <label for="">Fin:</label>
        <input value="{{ $function->end }}" class="form-control" type="tex" name="end" id="">
    </div>
    <div class="col-md">
        <label for="">Disponible:</label>
        <input value="{{ $function->available }}" class="form-control" type="tex" name="available" id="">
    </div>
    <div class="col-md">
        <label for="">Tipo:</label>
        <input value="{{ $function->type }}" class="form-control" type="text" name="type" id="">
    </div>

    <input class="btn btn-primary" type="submit"  value="Actualizar">
</form>
</div>
@endsection