<div>
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    
    <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>La Casa de Papel</h1>
                        <p>Accion Española</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('entrances.index') }}" role="button">Compra tu entrada</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" alt="" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>The 100</h1>
                        <p>Supervivencia</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('movies.index')}}" role="button">Leer mas</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Stranger Things</h1>
                        <p>Ciencia Ficcion</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('functions.index')}}" role="button">Ver mas</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    </div>
    