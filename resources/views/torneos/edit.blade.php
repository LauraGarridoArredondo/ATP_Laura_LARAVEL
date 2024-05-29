@php use App\Models\Torneos; @endphp

{{-- Ponemos el título --}}
@section('title', 'Editar Torneos')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Editar Torneos</title>
</head>
@include('header')
<h1 class="bg-info-subtle text-muted text-center">Editar Torneo</h1>

{{-- Codigos de validación de los errores, ver request validate del controlador --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br/>
@endif
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/poster.jpg') }}" width="600px" alt="Rafael"/>
            <br> <br>
        </div>
        <div class="col-md-6">
            <form action="{{ route("torneos.update", $torneo->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="ubicacion">Ubicación:</label>
                    <input class="form-control" id="ubicacion" name="ubicacion" type="text" required value="{{$torneo->ubicacion}}">
                </div>

                <div class="form-group">
                    <label for="modalidad"> Modalidad:</label>
                    <input class="form-control" id="modalidad" name="modalidad" type="text" required value="{{$torneo->modalidad}}">
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <input class="form-control" id="categoria" name="categoria" type="text" required value="{{$torneo->categoria}}">
                </div>

                <div class="form-group">
                    <label for="superficie">Superficie</label>
                    <input class="form-control" id="superficie" name="superficie" type="text" required value="{{$torneo->superficie}}">
                </div>

                <div class="form-group">
                    <label for="vacantes">Vacantes</label>
                    <input class="form-control" id="vacantes" name="vacantes" type="number" required value="{{$torneo->vacantes}}">
                </div>

                <div class="form-group">
                    <label for="premios">Premios</label>
                    <input class="form-control" id="premios" name="premios" type="text" required value="{{$torneo->premios}}">
                </div>

                <div class="form-group">
                    <label for="fecha_inicio">Fecha Inicio</label>
                    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date" required value="{{$torneo->fecha_inicio}}">
                </div>

                <div class="form-group">
                    <label for="fecha_fin">Fecha Fin</label>
                    <input class="form-control" id="fecha_fin" name="fecha_fin" type="date" required value="{{$torneo->fecha_fin}}">
                </div>


                <button class="btn btn-primary" type="submit">Actualizar</button>
                <a class="btn btn-secondary mx-2" href="{{ route('torneos.index') }}">Volver</a>
            </form>
        </div>
    </div>
</div>
</html>
@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
