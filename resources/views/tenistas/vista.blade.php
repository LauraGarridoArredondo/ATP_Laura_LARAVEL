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
    <title>Tenistas</title>
</head>
<body class="bg-info-subtle">
<br>
<h1 class="text-center" data-aos="fade-down">Algunos tenistas que participaron en el ATP son...</h1>
<br>
<div class="row row-cols-2 row-cols-md-4 g-2 text-center" data-aos="fade-up" >
    <div class="col">
        <div class="card" style="width: 18rem; margin-left:30px">
            <img class="card-img-top" src="{{asset('images/cristiano.jpg')}}" alt="cristiano">
            <div class="card-body">
                <h5 class="card-title">Cristiano</h5>
                <p class="card-text">Cristiano Caratti es un jugador de tenis italiano. En su carrera ha llegado a 2 finales ATP y su mejor posición en el ranking de individuales fue Nº26 en julio de 1991 y en el de dobles fue Nº148 en julio de 1990. También es recordado por haber llegado a los cuartos de final del Abierto de Australia en el 1991</p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 1)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/carlos.jpg')}}" alt="carlos">
            <div class="card-body">
                <h5 class="card-title">Carlos</h5>
                <p class="card-text">Carlos Alcaraz Garfia ​ es un tenista profesional español, actualmente en la tercera posición del ranking ATP.​ Es el vigente campeón del Campeonato de Wimbledon.​Como juvenil ganó dos torneos del ITF World Tennis Tour Juniors y alcanzó el número veintidós del ranking.</p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 2)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/camila.jpg')}}" alt="camila">
            <div class="card-body">
                <h5 class="card-title">Camila</h5>
                <p class="card-text">Camila Giorgi es una ex jugadora de tenis profesional italiana retirada en mayo de 2024. Su mejor ubicación en el ranking WTA fue llegar al N° 26 del mundo. Logróo ganar 4 títulos en el circuito WTA. En 2018 logró su mejor resultado en torneos de Grand Slam al llegar a los cuartos de final de Wimbledon.</p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 3)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/maria.jpg')}}" alt="maria">
            <div class="card-body">
                <h5 class="card-title">Maria</h5>
                <p class="card-text">María Yúrievna Sharápova ​ es una exjugadora de tenis profesional, periodista y modelo rusa. Ganó cinco torneos individuales del Grand Slam y ha ocupado el número 1 de la clasificación de la WTA durante 21 semanas.​ </p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 4)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem ; margin-left:400px">
            <img class="card-img-top" src="{{asset('images/roger.jpg')}}" alt="roger">
            <div class="card-body">
                <h5 class="card-title">Roger</h5>
                <p class="card-text">Roger Federer es un extenista suizo, considerado uno de los mejores de todos los tiempos. Ha sido ganador de 20 torneos de Grand Slam, cifra que lo ubica en tercer lugar del palmarés, sólo superado por el serbio Novak Djokovic y el español Rafael Nadal</p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 5)}}">Ver mas</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem; margin-left:400px">
            <img class="card-img-top" src="{{asset('images/serena.webp')}}" alt="serena">
            <div class="card-body">
                <h5 class="card-title">Serena</h5>
                <p class="card-text">Serena Williams Price es una exjugadora de tenis estadounidense que ha ganado 23 títulos individuales en torneos Grand Slam y ha ostentado la primera posición en el ranking WTA durante 319 semanas. Su hermana mayor, Venus, también es tenista profesional</p>
                <a class="btn btn-primary btn-sm" href="{{route('tenistas.show', 6)}}">Ver mas</a>
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
