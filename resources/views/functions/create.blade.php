@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Registrar Consumible</h1></div>
    <div class="col-sm-2">
        <a href="{{ route("functions.index")}}">
            <button clas="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


    <form action="{{ route('functions.store') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-md">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="">
            </div>
            <div class="col-md">
                <label for="">Inicio:</label>
                <input class="form-control" type="text" name="start" id="">
            </div>
            <div class="col-md">
                <label for="">Fin:</label>
                <input class="form-control" type="text" name="end" id="">
            </div>
            <div class="col-md">
                <label for="">Disponible:</label>
                <input class="form-control" type="text" name="available" id="">
            </div>
            <div class="col-md">
                <label for="">Tipo:</label>
                <input class="form-control" type="text" name="type" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

@endsection
