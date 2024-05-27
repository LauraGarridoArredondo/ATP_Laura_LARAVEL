<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>
<body>
@include('header')
@include('main')
<br>
<H2 class="text-center" data-aos="fade-in">Nuestos Expertos recomiendan...</H2>
<br>
<div class="row row-cols-2 row-cols-md-5 g-2" data-aos="fade-up" >
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/mochila.jpg')}}" alt="Mochila">
        <div class="card-body">
            <h5 class="card-title">Tour Bolsa Para Zapatillas</h5>
            <p class="card-text">Segura, robusta y con mucho espacio de almacenamiento. Ideal si estás buscando una forma de guardar ordenadamente tus zapatillas de tenis, la bolsa ATP es la tuya.</p>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/bolsaRAQUETA.jpg')}}" alt="Bolsa">
            <div class="card-body">
                <h5 class="card-title">ATP Tour</h5>
                <p class="card-text">Puedes guardar cómodamente una raqueta aquí y llevarla contigo a tu próximo partido o sesión de entrenamiento.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/gorra.jpg')}}" alt="Gorra">
            <div class="card-body">
                <h5 class="card-title">Performance</h5>
                <p class="card-text">Su función de absorción de la humedad expulsa eficazmente el sudor y te mantiene seco y cómodo. </p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{'images/grip.jpg'}}" alt="Grips">
            <div class="card-body">
                <h5 class="card-title">Performance Grip Pack De 3</h5>
                <p class="card-text">Estos grips proporcionan un agarre excepcional que te da control y precisión en la pista.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{'images/amortiguadores.jpg'}}" alt="amortiguadores">
            <div class="card-body">
                <h5 class="card-title">Performance Pack De 2</h5>
                <p class="card-text">Estos amortiguadores no sólo ofrecen una excelente amortiguación de las vibraciones, sino también un rendimiento excepcional</p>
            </div>
        </div>
    </div>
</div>
<br>
@include('about')
@include('footer')
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>
