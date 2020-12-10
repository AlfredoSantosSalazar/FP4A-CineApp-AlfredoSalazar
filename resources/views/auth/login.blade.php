@extends('layouts.app')

@section('content')


<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

<div align="center" class="alinearCentro">
<div class="card mb-4 bg-light" style="max-width: 850px;">
<div align="center" class="alinearCentro">
    <div class="row">
        <div class="wrapper">
            <div class="container">
              <h1 class="name">CINE ALFREDO</h1>
        
                                
                            <div align="center" class="alinearCentro">
                            
                            <img class="rounded-circle imagenCard" src="{{ asset('img/cinelogo.jpg') }}" alt="">
                           </div>
                           
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <!-- >{{ __('E-Mail Address') }}</label> -->

                                    <div class="col-md-8 offset-md-2">
                                        <input id="email" placeholder="Dirección de correo electrónico" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- >{{ __('Password') }}</label> -->

                                    <div class="col-md-8 offset-md-2">
                                        <input placeholder="Contraseña" id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1 offset-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--<>-->
                                        <div class="row.col">
                                        <button type="submit" class="btn btn-primary col-5">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Recuperar Contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                    </form></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="col-sm-2 col-lg-4 col-md-4"></div>

@endsection