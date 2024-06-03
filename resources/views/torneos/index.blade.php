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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Torneos</title>
</head>
<body>
@include('header')
<BR>
<h1 data-aos="fade-down" class="text-center text-muted bg-info-subtle">Listado de Torneos</h1>

<form action="{{ route('torneos.index') }}" class="mb-3" method="get">
    @csrf
    <div data-aos="fade-down" class="input-group">
        <input type="text" class="form-control" id="search" name="search" placeholder="Barcelona...">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </div>
</form>

@if(count($torneos) > 0)
    <table data-aos="fade-in" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ubicación</th>
            <th>Modalidad</th>
            <th>Categoria</th>
            <th>Superficie</th>
            <th>Vacantes</th>
            <th>Premios</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Imagen</th>
            <th></th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($torneos as $torneo)
            <tr>
                <td>{{ $torneo->id }}</td>
              <td>{{ $torneo->ubicacion }}</td>
                <td>{{ $torneo->modalidad }}</td>
                <td>{{ $torneo->categoria }}</td>
                <td>{{ $torneo->superficie }}</td>
                <td>{{ $torneo->vacantes }}</td>
                <td>{{ $torneo->premios }}</td>
                <td>{{ $torneo->fecha_inicio }}</td>
                <td>{{ $torneo->fecha_fin }}</td>
                <td><img src="{{ $torneo->imagen }}" alt="{{ $torneo->nombre }}" width="150"></td>
                <td><img src="{{ asset('storage/images/' . $torneo->imagen) }}" alt="{{ $torneo->ubicacion }}" width="150"></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('torneos.show', $torneo->id)}}">Detalles</a>
                    <a class="btn btn-secondary btn-sm" href="{{route('torneos.edit', $torneo->id)}}">Editar</a>
                    <a class="btn btn-info btn-sm" href="{{route('torneos.editImage', $torneo->id)}}">Imagen</a>
                    <form action="{{route('torneos.destroy', $torneo->id)}}" method="POST" style="display: inline;">
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
    <p>No hay torneos registrados...</p>
@endif

<a class="btn btn-success" href="{{route('torneos.create')}}">Nuevo Torneo</a>
@include('about')
@include('footer')
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
