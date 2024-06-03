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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Tenistas Crear</title>
</head>
<body>
<br>
<h1 data-aos="fade-down" class="text-center text-muted bg-info-subtle">Crear Torneo</h1>
<div class="text-center"  data-aos="fade-down">
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

<div class="container mt-5" data-aos="fade-in">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/torneosProximos.webp') }}" alt="Tenis" class="img-fluid"/>
        </div>
        <div class="col-md-6">
            <form action="{{ route("torneos.store") }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group m-3">
                    <label for="ubicacion">Ubicación</label>
                    <input class="form-control" id="ubicacion" name="ubicacion" type="text" required>
                </div>

                <div class="form-group m-3">
                    <label for="modalidad">Modalidad</label>
                    <br>
                    <label class="text-muted"> Individual, Dobles o Individual y Dobles</label>
                    <input class="form-control" id="modalidad" name="modalidad" type="text" required>
                </div>
                <div class="form-group m-3">
                    <label for="categoria">Categoria</label>
                    <br>
                    <label class="text-muted">Master 1000, Master 200 o Master 350</label>
                    <input class="form-control" id="categoria" name="categoria" type="text" required>
                </div>
                <div class="form-group m-3">
                    <label for="superficie">Superficie</label>
                    <br>
                    <label class="text-muted">Duro, hierba o Arcilla</label>
                    <input class="form-control" id="superficie" name="superficie" type="text" required>
                </div>
                <div class="form-group m-3">
                    <label for="vacantes">Vacantes</label>
                    <br>
                    <label class="text-muted">Añadir ID del tenista que pueda participar</label>
                    <input class="form-control" id="vacantes" name="vacantes" type="text" required>
                </div>
                <div class="form-group m-3">
                    <label for="premios">Premios</label>
                    <br>
                    <label class="text-muted">10.000.000 por ejemplo</label>
                    <input class="form-control" id="premios" name="premios" type="text" required>
                </div>
                <div class="form-group m-3">
                    <label for="fecha_inicio">Fecha Inicio</label>
                    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date" required>
                </div>
                <div class="form-group m-3">
                    <label for="fecha_fin">Fecha Fin</label>
                    <input class="form-control" id="fecha_fin" name="fecha_fin" type="date" required>
                </div>
                <div class="form-group m-3">
                    <label for="imagen">Imagen:</label>
                    <input class="form-control" id="imagen" name="imagen" type="file" required>
                </div>

                <button class="btn btn-primary m-3" type="submit">Crear</button>
                <a class="btn btn-secondary m-3" href="{{ route('torneos.index') }}">Volver</a>
            </form>
        </div>
    </div>
</div>

@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
