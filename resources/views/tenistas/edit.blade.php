@php use App\Models\Tenistas; @endphp

@section('title', 'Editar Tenista')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Editar Tenistas</title>
</head>
@include('header')
    <h1 class="bg-info-subtle text-muted text-center">Editar Tenista</h1>

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
            <img src="{{ asset('images/tenistaEdit.jpg') }}" width="600px" alt="Rafael"/>
            <br><br><br>
            <img width="600px" src="{{ asset('images/atp_tour_2024.png') }}" alt="Logo" />
        </div>
        <div class="col-md-6">
    <form action="{{ route("tenistas.update", $tenista->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" id="nombre" name="nombre" type="text" required value="{{$tenista->nombre}}">
        </div>

        <div class="form-group">
            <label for="pais">Pais:</label>
            <input class="form-control" id="pais" name="pais" type="text" required value="{{$tenista->pais}}">
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required value="{{$tenista->fecha_nacimiento}}">
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input class="form-control" id="edad" name="edad" type="number" required value="{{$tenista->edad}}">
        </div>

        <div class="form-group">
            <label for="altura">Altura:</label>
            <input class="form-control" id="altura" name="altura" type="number" required value="{{$tenista->altura}}">
        </div>

        <div class="form-group">
            <label for="peso">Peso:</label>
            <input class="form-control" id="peso" name="peso" type="number" required value="{{$tenista->peso}}">
        </div>

        <div class="form-group">
            <label for="fecha_debut">Fecha de Profesión:</label>
            <input class="form-control" id="fecha_debut" name="fecha_debut" type="date" required value="{{$tenista->fecha_debut}}">
        </div>

        <div class="form-group">
            <label for="mano">Mano:</label>
            <br>
            <label class="text-muted">diestro, zurdo</label>
            <input class="form-control" id="mano" name="mano" type="text" required value="{{$tenista->mano}}">
        </div>

        <div class="form-group">
            <label for="reves">Revés:</label>
            <br>
            <label class="text-muted">una_mano, dos_manos</label>
            <input class="form-control" id="reves" name="reves" type="text" required value="{{$tenista->reves}}">
        </div>

        <div class="form-group">
            <label for="entrenador">Entrenador:</label>
            <input class="form-control" id="entrenador" name="entrenador" type="text" required value="{{$tenista->entrenador}}">
        </div>

        <div class="form-group">
            <label for="dinero_ganado">Dinero Ganado:</label>
            <input class="form-control" id="dinero_ganado" name="dinero_ganado" type="number" required value="{{$tenista->dinero_ganado}}">
        </div>

        <div class="form-group">
            <label for="mejor_ranking">Mejor Rank:</label>
            <input class="form-control" id="mejor_ranking" name="mejor_ranking" type="text" required value="{{$tenista->mejor_ranking}}">
        </div>

        <div class="form-group">
            <label for="num_victorias">Numero de Victorias:</label>
            <input class="form-control" id="num_victorias" name="num_victorias" type="number" required value="{{$tenista->num_victorias}}">
        </div>

        <div class="form-group">
            <label for="num_derrotas">Numero de Derrotas:</label>
            <input class="form-control" id="num_derrotas" name="num_derrotas" type="number" required value="{{$tenista->num_derrotas}}">
        </div>


        <button class="btn btn-primary" type="submit">Actualizar</button>
        <a class="btn btn-secondary mx-2" href="{{ route('tenistas.index') }}">Volver</a>
    </form>
        </div>
    </div>
</div>
<br>
</html>
@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
