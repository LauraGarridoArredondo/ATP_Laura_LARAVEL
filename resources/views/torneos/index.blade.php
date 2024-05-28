@php use App\Models\Torneos; @endphp
@section('title', 'Torneos Detalles')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Torneos</title>
</head>
<body>
@include('header')
<BR>
<h1 class="text-center text-muted">Listado de Torneos</h1>

<form action="{{ route('torneos.index') }}" class="mb-3" method="get">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" id="search" name="search" placeholder="Master 1000...">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </div>
</form>

@if(count($torneos) > 0)
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($torneos as $torneo)
            <tr>
                <td>{{ $torneo->id }}</td>
              <td>{{ $torneo->ubicacion }}</td>
                <td><img src="{{ $torneo->imagen }}" alt="{{ $torneo->nombre }}" width="150"></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('to.show', $torneo->id)}}">Detalles</a>
                    <a class="btn btn-secondary btn-sm" href="{{route('tenistas.edit', $torneo->id)}}">Editar</a>
                    <a class="btn btn-info btn-sm" href="{{route('tenistas.editImage', $torneo->id)}}">Imagen</a>
                    <form action="{{route('tenistas.destroy', $torneo->id)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres borrarlo?')"
                                type="submit">Eliminar
                        </button>
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
