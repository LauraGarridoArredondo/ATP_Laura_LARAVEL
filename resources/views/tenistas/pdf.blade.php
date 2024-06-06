@php use App\Models\Tenistas; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PDF de tenistas</title>
</head>
<style>
    .cabecera {
        background-color: #2d3748;
        color: white;
    }
    .contenido {
        background-color: #a9a9a9;
    }
</style>
<body>
<header>
    <h1 class="text-center">PDF de tenistas</h1>
    <table class="table" style="text-align: center;font-size:18px;">
        <dl class="row text-muted row-cols-md-6 row-cols-1" data-aos="fade-in">
            <dt class="cabecera">ID</dt>
            <dd class="contenido">{{ $tenista->id }}</dd>
            <dt class="cabecera">Nombre</dt>
            <dd class="contenido">{{ $tenista->nombre }}</dd>
            <dt class="cabecera">Pais</dt>
            <dd class="contenido">{{ $tenista->pais }}</dd>
            <dt class="cabecera">Fecha de nacimiento</dt>
            <dd class="contenido">{{ $tenista->fecha_nacimiento }}</dd>
            <dt class="cabecera">Edad</dt>
            <dd class="contenido">{{ $tenista->edad }}</dd>
            <dt class="cabecera">Altura</dt>
            <dd class="contenido">{{ $tenista->altura }}</dd>
            <dt class="cabecera">Peso</dt>
            <dd class="contenido">{{ $tenista->peso }}</dd>
            <dt class="cabecera">Fecha de Profesión</dt>
            <dd class="contenido">{{ $tenista->fecha_debut }}</dd>
            <dt class="cabecera">Mano</dt>
            <dd class="contenido">{{ $tenista->mano }}</dd>
            <dt class="cabecera">Revés</dt>
            <dd class="contenido">{{ $tenista->reves }}</dd>
            <dt class="cabecera">Entrenador</dt>
            <dd class="contenido">{{ $tenista->entrenador }}</dd>
            <dt class="cabecera">Dinero Ganado</dt>
            <dd class="contenido">{{ $tenista->dinero_ganado }}</dd>
            <dt class="cabecera">Mejor Ranking</dt>
            <dd class="contenido">{{ $tenista->mejor_ranking }}</dd>
            <dt class="cabecera">Numero de Victorias</dt>
            <dd class="contenido">{{ $tenista->num_victorias }}</dd>
            <dt class="cabecera">Numero de Derrotas</dt>
            <dd class="contenido">{{ $tenista->num_derrotas }}</dd>
            <dt class="cabecera">Imagen</dt>
            <dd class="contenido"><img src="{{ $tenista->imagen }}" alt="{{ $tenista->nombre }}" width="150"></dd>
        </dl>
    </table>
</header>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
