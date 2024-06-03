@php use App\Models\Torneos; @endphp

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
    <title>Torneos Detalles</title>
</head>
<body>
@section('title', 'Torneos Detalles')
<br>
<h1 data-aos="fade-down" class="text-center bg-info-subtle">Detalles de Torneos</h1>
<br>
<table>
    <dl class="row text-muted  row-cols-md-6 row-cols-1" data-aos="fade-in">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $torneos->id }}</dd>
        <dt class="col-sm-3">Ubicación</dt>
        <dd class="col-sm-9">{{ $torneos->ubicacion }}</dd>
        <dt class="col-sm-3">Modalidad</dt>
        <dd class="col-sm-9">{{ $torneos->modalidad }}</dd>
        <dt class="col-sm-3">Categoria</dt>
        <dd class="col-sm-9">{{ $torneos->categoria }}</dd>
        <dt class="col-sm-3">Superficie</dt>
        <dd class="col-sm-9">{{ $torneos->superficie }}</dd>
        <dt class="col-sm-3">Vacantes</dt>
        <dd class="col-sm-9">{{ $torneos->vacantes }}</dd>
        <dt class="col-sm-3">Premios</dt>
        <dd class="col-sm-9">{{ $torneos->premios }}</dd>
        <dt class="col-sm-3">Fecha Inicio</dt>
        <dd class="col-sm-9">{{ $torneos->fecha_inicio }}</dd>
        <dt class="col-sm-3">Fecha Fin</dt>
        <dd class="col-sm-9">{{ $torneos->fecha_fin }}</dd>
        <dt class="col-sm-3">Imagen</dt>
        <dd class="col-sm-9"><img src="{{ $torneos->imagen }}" alt="{{ $torneos->nombre }}" width="150"></dd>
    </dl>
</table>

<a data-aos="fade-down" class="btn btn-primary text-white" href="{{route('torneos.index')}}">Volver</a>
</body>
<br> <br>
<img height="700px" width="1490px" src="{{ asset('images/atpCollage.png') }}" alt="GifTenistas" />
@include('about')
@include('footer')
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
