@extends('layouts.app')   <!-- Extender plantilla blade -->

@section('content')     <!-- Invocar sección content -->
<!-- Lo que se escriba aquí se verá en el index -->
<div class="text-center">
    <h1>Entradas</h1>
</div>
<br><br>

<div>
    <a href="{{ route('entrances.create') }}">
        <button class="btn btn-primary">Agregar</button>
    </a>
</div>

<table class="table table-responsive-md">
    <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Sala</th>
    <th>Precio</th>
    <th>Hora</th>
    </thead>
    <tbody>
    @forelse ($entrances as $entrance)

        <tr>
            <td>{{ $entrance->id }}</td>
            <td>{{ $entrance->name }}</td>
            <td>{{ $entrance->sala }}</td>
            <td>{{ $entrance->prince }}</td>
            <td>{{ $entrance->hourEntrance }}</td>
            <td>
                <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">

                    <a href="{{ route('entrances.show', $entrance->id) }}"class="btn btn-primary">Comprar</a>

                    <a href="{{ route('entrances.edit', $entrance->id) }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>

                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <div class="text-center">
            <p>No hay datos</p>
            
            </a>
        </div>
    @endforelse
    </tbody>
</table>

@endsection
