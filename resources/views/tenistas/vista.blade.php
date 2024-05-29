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
<body>
<p>Soy la vista de usuario de tenistas</p>
<div class="row row-cols-2 row-cols-md-5 g-2" data-aos="fade-up" >
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/cristiano.jpg')}}" alt="Mochila">
            <div class="card-body">
                <h5 class="card-title">Cristiano</h5>
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
                <h5 class="card-title">Carlos</h5>
                <p class="card-text">Su función de absorción de la humedad expulsa eficazmente el sudor y te mantiene seco y cómodo. </p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/grip.jpg')}}" alt="Grips">
            <div class="card-body">
                <h5 class="card-title">Camila</h5>
                <p class="card-text">Estos grips proporcionan un agarre excepcional que te da control y precisión en la pista.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/amortiguadores.jpg')}}" alt="amortiguadores">
            <div class="card-body">
                <h5 class="card-title">Maria</h5>
                <p class="card-text">Estos amortiguadores no sólo ofrecen una excelente amortiguación de las vibraciones, sino también un rendimiento excepcional</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/amortiguadores.jpg')}}" alt="amortiguadores">
            <div class="card-body">
                <h5 class="card-title">Roger</h5>
                <p class="card-text">Estos amortiguadores no sólo ofrecen una excelente amortiguación de las vibraciones, sino también un rendimiento excepcional</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/amortiguadores.jpg')}}" alt="amortiguadores">
            <div class="card-body">
                <h5 class="card-title">Serena</h5>
                <p class="card-text">Estos amortiguadores no sólo ofrecen una excelente amortiguación de las vibraciones, sino también un rendimiento excepcional</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@include('about')
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
