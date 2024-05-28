@php use App\Models\Tenistas; @endphp
@extends('main')
    @section('title', 'Tenistas Detalles')
    @section('content')
    <h1>Detalles de Tenistas</h1>
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $tenista->id }}</dd>
            <dt class="col-sm-3">Nombre</dt>
            <dd class="col-sm-9">{{ $tenista->nombre }}</dd>
            <dt class="col-sm-3">Pais</dt>
            <dd class="col-sm-9">{{ $tenista->pais }}</dd>
            <dt class="col-sm-3">Fecha de nacimiento</dt>
            <dd class="col-sm-9">{{ $tenista->fecha_nacimiento }}</dd>
            <dt class="col-sm-3">Edad</dt>
            <dd class="col-sm-9">{{ $tenista->edad }}</dd>
            <dt class="col-sm-3">Altura</dt>
            <dd class="col-sm-9">{{ $tenista->altura }}</dd>
            <dt class="col-sm-3">Peso</dt>
            <dd class="col-sm-9">{{ $tenista->peso }}</dd>
            <dt class="col-sm-3">Fecha de Profesión</dt>
            <dd class="col-sm-9">{{ $tenista->fecha_debut }}</dd>
            <dt class="col-sm-3">Mano</dt>
            <dd class="col-sm-9">{{ $tenista->mano }}</dd>
            <dt class="col-sm-3">Revés</dt>
            <dd class="col-sm-9">{{ $tenista->reves }}</dd>
            <dt class="col-sm-3">Entrenador</dt>
            <dd class="col-sm-9">{{ $tenista->entrenador }}</dd>
            <dt class="col-sm-3">Dinero Ganado</dt>
            <dd class="col-sm-9">{{ $tenista->dinero_ganado }}</dd>
            <dt class="col-sm-3">Mejor Rank</dt>
            <dd class="col-sm-9">{{ $tenista->mejor_rank }}</dd>
            <dt class="col-sm-3">Numero de Victorias</dt>
            <dd class="col-sm-9">{{ $tenista->num_victorias }}</dd>
            <dt class="col-sm-3">Numero de Derrotas</dt>
            <dd class="col-sm-9">{{ $tenista->num_derrotas }}</dd>
            <dt class="col-sm-3">Imagen</dt>
            <dd class="col-sm-9"><img src="{{ $tenista->imagen }}" alt="{{ $tenista->nombre }}" width="150"></dd>
        </dl>
<a class="btn btn-primary" href="{{route('tenistas.index')}}">Volver</a>
    @endsection
