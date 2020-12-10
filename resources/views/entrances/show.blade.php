@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-10"><h1>Comprar Entrada</h1></div>
    <div class="col-sm-2">
        <a href="{{ route("entrances.index")}}">
            <button clas="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


    <form action="{{ route('entrances.store') }}" method="post">
        @csrf


        <div class="col-md">
            <label for="">Nombre:</label>
            <input value="{{ $entrance->name }}">
        </div>
        <div class="col-md">
            <label for="">Sala:</label>
            <input value="{{ $entrance->sala }}">
        </div>
        <div class="col-md">
            <label for="">Precio:</label>
            <input value="{{ $entrance->prince }}">
        </div>
        <div class="col-md">
            <label for="">Hora:</label>
            <input value="{{ $entrance->hourEntrance }}">
        </div>
        
        <div class="col-md">
            <label>Aciento:</label>
        <select class="form-control" name="category" id="">
            <option value="">Elija un Lugar</option>
            <option value="Estrenos">A1</option>
            <option value="Trilogias">A2</option>
            <option value="Tendencias">A3</option>
        </select>
            </div>
                    <div class="col-md">
                        <label>Pago:</label>
                    <select class="form-control" name="category" id="">
                        <option value="">Elija una Forma de Pago</option>
                        <option value="Estrenos">EFECTIVO</option>
                        <option value="Trilogias">TARJETA</option>
                        <option value="Tendencias">CUPON</option>
                    </select>
                        </div>

                     



        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-danger" type="submit" value="COMPRAR">
        </div>

    </form>

@endsection
