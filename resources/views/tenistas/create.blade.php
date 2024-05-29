@php use App\Models\Tenistas; @endphp
@section('title', 'Crear Tenistas')
@include('header')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Tenistas Crear</title>
</head>
<body>
<br>
<h1 class="text-center text-muted bg-info-subtle">Crear Tenista</h1>
<div class="text-center">
    <img width="110px" src="{{ asset('images/raquetass.png') }}" alt="raquetas"/>
</div>

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
            <img src="{{ asset('images/RafaLado.jpg') }}" alt="Rafael" class="img-fluid"/>
            <br><br><br>
            <img width="600px" src="{{ asset('images/atp_tour_2024.png') }}" alt="Logo" />
        </div>
        <div class="col-md-6">
            <form action="{{ route("tenistas.store") }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group m-3">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="pais">Pais:</label>
                    <input class="form-control" id="pais" name="pais" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
                </div>

                <div class="form-group m-3">
                    <label for="edad">Edad:</label>
                    <input class="form-control" id="edad" name="edad" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="altura">Altura:</label>
                    <input class="form-control" id="altura" name="altura" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="peso">Peso:</label>
                    <input class="form-control" id="peso" name="peso" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="fecha_debut">Fecha Debut:</label>
                    <input class="form-control" id="fecha_debut" name="fecha_debut" type="date" required>
                </div>

                <div class="form-group m-3">
                    <label for="mano">Mano:</label>
                    <br>
                    <label class="text-muted"> Diestro, Zurdo </label>
                    <input class="form-control" id="mano" name="mano" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="reves">Revés:</label>
                    <br>
                    <label class="text-muted"> una_mano, dos_manos </label>
                    <input class="form-control" id="reves" name="reves" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="dinero_ganado">Dinero Ganado:</label>
                    <input class="form-control" id="dinero_ganado" name="dinero_ganado" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="mejor_ranking">Mejor Rank:</label>
                    <input class="form-control" id="mejor_ranking" name="mejor_ranking" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="entrenador">Entrenador:</label>
                    <input class="form-control" id="entrenador" name="entrenador" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="num_victorias">Numero de Victorias:</label>
                    <input class="form-control" id="num_victorias" name="num_victorias" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="num_derrotas">Numero de Derrotas:</label>
                    <input class="form-control" id="num_derrotas" name="num_derrotas" type="number" required>
                </div>

                <div class="form-group m-3">
                    <label for="imagen">Imagen:</label>
                    <input class="form-control" id="imagen" name="imagen" type="file" required>
                </div>

                <button class="btn btn-primary m-3" type="submit">Crear</button>
                <a class="btn btn-secondary m-3" href="{{ route('tenistas.index') }}">Volver</a>
            </form>
        </div>
    </div>
</div>

@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
