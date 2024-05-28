@php use App\Models\Tenistas; @endphp
    @section('title', 'Tenistas Detalles')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Tenistas</title>
</head>
<body>
@include('header')
<BR>
<h1 class="text-center text-muted bg-info-subtle">Listado de Tenistas</h1>

<form action="{{ route('tenistas.index') }}" class="mb-3" method="get">
@csrf
    <div class="input-group">
        <input type="text" class="form-control" id="search" name="search" placeholder="Rafael Nadal...">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </div>
</form>

@if(count($tenistas) > 0)
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Pais</th>
            <th>Fecha de nacimiento</th>
            <th>Edad</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Fecha de Profesión</th>
            <th>Mano</th>
            <th>Revés</th>
            <th>Entrenador</th>
            <th>Dinero Ganado</th>
            <th>Mejor Rank</th>
            <th>Numero de Victorias</th>
            <th>Numero de Derrotas</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tenistas as $tenista)
            <tr>
                <td>{{ $tenista->id }}</td>
                <td>{{ $tenista->nombre }}</td>
                <td>{{ $tenista->pais }}</td>
                <td>{{ $tenista->fecha_nacimiento }}</td>
                <td>{{ $tenista->edad }}</td>
                <td>{{ $tenista->altura }}</td>
                <td>{{ $tenista->peso }}</td>
                <td>{{ $tenista->fecha_debut }}</td>
                <td>{{ $tenista->mano }}</td>
                <td>{{ $tenista->reves }}</td>
                <td>{{ $tenista->entrenador }}</td>
                <td>{{ $tenista->dinero_ganado }}</td>
                <td>{{ $tenista->mejor_ranking }}</td>
                <td>{{ $tenista->num_victorias }}</td>
                <td>{{ $tenista->num_derrotas }}</td>
                <td><img src="{{ $tenista->imagen }}" alt="{{ $tenista->nombre }}" width="150"></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', $tenista->id)}}">Detalles</a>
                    <a class="btn btn-secondary btn-sm" href="{{route('tenistas.edit', $tenista->id)}}">Editar</a>
                    <a class="btn btn-info btn-sm" href="{{route('tenistas.editImage', $tenista->id)}}">Imagen</a>
                    <form action="{{route('tenistas.destroy', $tenista->id)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres borrarlo?')" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No hay tenistas registrados...</p>
@endif

<a class="btn btn-success" href="{{route('tenistas.create')}}">Nuevo Tenista</a>
@include('about')
@include('footer')
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
