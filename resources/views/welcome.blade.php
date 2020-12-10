@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
        @include('layouts.carousel')
    </div>

    <div class="col-6"></div>
<div class="btn-group col-4" role="group" aria-label="Basic example">
    <a href="{{route('imprimir')}}" class="btn btn-danger">ImprimirPDF</a>
    <a href="{{route('imprimir')}}" class="btn btn-success">ImprimirXLS</a>
    <a href="{{route('imprimir')}}" class="btn btn-dark">ImprimirCSV</a>
    <a href="{{route('imprimir')}}" class="btn btn-warning">Graficar</a>
</div>
<br>
<br>


    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Chernobyl</h3>

                    <p class="mb-auto">Valientes hombres y mujeres luchan por mitigar los daños de la catástrofe nuclear de Chernóbil ocurrida el 25 de abril de 1986.</p>
                    <a href="{{ route('movies.index') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">El recluso</h3>

                    <p class="mb-auto">El exmarino, Lázaro Mendoza, ingresa como falso convicto a una prisión mexicana fronteriza, La Rotunda. Su misión es infiltrarse en una peligrosa banda de presos para investigar el secuestro de una joven y encontrarla.</p>
                    <a href="{{ route('movies.index') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/4.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">El renacido</h3>

                    <p class="mb-auto">El trampero Hugh Glass intenta vengarse de sus compañeros, quienes lo abandonaron herido en el bosque después de que lo atacó un oso, pensando que moriría, víctima de las lesiones y de la crudeza del entorno y del invierno. </p>
                    <a href="{{ route('movies.index') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/5.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Mr Robot</h3>

                    <p class="mb-auto">Elliot Alderson, un brillante programador con problemas de ansiedad social, trabaja como ingeniero de ciberseguridad de día y como justiciero de noche.</p>
                    <a href="{{ route('movies.index') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/6.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

   

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
   

@endsection
