@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Registrar Silla</h1></div>
    <div class="col-sm-2">
        <a href="{{ route("room.index")}}">
            <button clas="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


    <form action="{{ route('room.store') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-md">
                <label for="">Silla:</label>
                <input class="form-control" type="text" name="chairs" id="">
            </div>
            <div class="col-md">
                <label for="">localizacion:</label>
                <input class="form-control" type="text" name="location" id="">
            </div>
            <div class="col-md">
                <label for="">Capacidad:</label>
                <input class="form-control" type="number" name="capacy" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

@endsection
