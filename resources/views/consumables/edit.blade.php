@extends('layouts.app')
@section('name', 'EditarConsumible')
@section('content')

<br>
    <div class="row">
        <div class="col-sm-10"><h1>Formulario para editar el Consumible</div>
        <div class="col-sm-2">
            <a href="{{route("consumables.index")}}">
                <button clas="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

<div class="jumbotron">
<form method="post" action="{{route('consumables.update', $consumable->id)}}">
    @csrf
    @method('PUT')

    <div class="col-md">
        <label for="">Artículo:</label>
        <input value="{{ $consumable->name }}" class="form-control" type="text" name="name" id="">
    </div>
    <div class="col-md">
        <label for="">Precio:</label>
        <input value="{{ $consumable->price }}" class="form-control" type="text" name="price" id="">
    </div>
    <div class="col-md">
        <label for="">Cantidad:</label>
        <input value="{{ $consumable->quantity }}" class="form-control" type="number" name="quantity" id="">
    </div>

    <input class="btn btn-primary" type="submit"  value="Actualizar">
</form>
</div>
@endsection
