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
    <title>Torneos</title>
</head>
<body class="bg-info-subtle">
<br>
<h1 class="text-center" data-aos="fade-down">Algunos torneos a disposición en el ATP son...</h1>
<br>
<div class="row row-cols-2 row-cols-md-4 g-2 text-center" data-aos="fade-up" >
    <div class="col">
        <div class="card" style="width: 18rem; margin-left:30px">
            <img class="card-img-top" src="{{asset('images/roma.jpg')}}" alt="barcelona">
            <div class="card-body">
                <h5 class="card-title">Barcelona</h5>
                <p class="card-text">Aquí se mostro el torneo 300 del 5 de enero de ATP. Siendo el torneo de los mejores de todos los torneos según varios medios</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 1)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/Madrid.jpg')}}" alt="madrid">
            <div class="card-body">
                <h5 class="card-title">Madrid</h5>
                <p class="card-text">Aqui se realizo el torneo 1000 del 6 de enero de ATP, siendo el mayor torneo recibido por parte del público</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 2)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/valencia.jpg')}}" alt="valencia">
            <div class="card-body">
                <h5 class="card-title">Valencia</h5>
                <p class="card-text">Dentro de las intalaciones de este torneo se puede obtener una vista de toda la ciudad de Valencia y ver el partido de tenis realizandose</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 3)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/Sevilla.jpg')}}" alt="sevilla">
            <div class="card-body">
                <h5 class="card-title">Sevilla</h5>
                <p class="card-text"> Este torneo se realizó en la ciudad de Sevilla y siendo el mejor visto dentro de los canales de telemadrid en directo cada torneo realizado</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 4)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem ; margin-left:400px">
            <img class="card-img-top" src="{{asset('images/malaga.jpg')}}" alt="malaga">
            <div class="card-body">
                <h5 class="card-title">Malaga</h5>
                <p class="card-text">Rafael Nadal considera que el mejor de todos los torneos de tenis de toda la historia por su gran capacidad de tiro</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 5)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem; margin-left:400px">
            <img class="card-img-top" src="{{asset('images/Cordoba.jpg')}}" alt="cordoba">
            <div class="card-body">
                <h5 class="card-title">Cordoba</h5>
                <p class="card-text">Este torneo se realizó en la ciudad de Cordoba tiene una vista de toda la ciudad y con grandes premios a disposición de los tenistas</p>
                <a class="btn btn-primary btn-sm" href="{{route('torneos.show', 6)}}">Ver mas</a>
            </div>
        </div>
    </div>
</div>

<div>
</div>
<br>
</body>
</html>
@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
