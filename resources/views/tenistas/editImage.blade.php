@php use App\Models\Tenistas; @endphp
@section('title', 'Editar Imagen del Tenista')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Editar Imagen Tenistas</title>
</head>
@include('header')
    <h1 class="bg-info-subtle text-muted text-center">Editar Imagen del Tenista</h1>

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
            <img width="600px" src="{{ asset('images/atp_tour_2024.png') }}" alt="Logo" />
        </div>
        <div class="col-md-6">
    <dl class="text-lg-start">
        <dt class="col-sm-2">ID:</dt>
        <dd class="col-sm-10">{{$tenista->id}}</dd>
        <dt class="col-sm-2">Nombre:</dt>
        <dd class="col-sm-10">{{$tenista->nombre}}</dd>
        <dt class="col-sm-2">Imagen:</dt>
        <dd class="col-sm-10"><img src="{{ $tenista->imagen }}" alt="{{ $tenista->nombre }}" width="150"></dd>
    </dl>

    <form action="{{ route("tenistas.updateImage", $tenista->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <br>
            <input accept="image/*" class="form-control-file" id="imagen" name="imagen" required type="file">
            <small class="text-danger"></small>
        </div>
<br>
        <button class="btn btn-primary" type="submit">Actualizar</button>
        <a class="btn btn-secondary mx-2" href="{{ route('tenistas.index') }}">Volver</a>
    </form>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
    @include('about')
@include('footer')
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
