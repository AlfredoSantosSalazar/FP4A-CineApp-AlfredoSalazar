@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Registrar Entrada</h1></div>
    <div class="col-sm-2">
        <a href="{{ route("entrances.index")}}">
            <button clas="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


    <form action="{{ route('entrances.store') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-md">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="name" id="">
            </div>
            <div class="col-md">
                <label for="">Sala:</label>
                <input class="form-control" type="text" name="sala" id="">
            </div>
            <div class="col-md">
                <label for="">Precio:</label>
                <input class="form-control" type="number" name="prince" id="">
            </div>
            <div class="col-md">
                <label for="">Hora:</label>
                <input class="form-control" type="text" name="hourEntrance" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

@endsection
