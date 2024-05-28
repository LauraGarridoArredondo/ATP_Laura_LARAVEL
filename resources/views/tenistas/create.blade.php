@php use App\Models\Tenistas; @endphp
@section('title', 'Crear Tenistas')
@section('content')
    <h1>Crear Tenistas</h1>

    {{-- Codigos de validación de los errores--}}
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

    <form action="{{ route("tenistas.store") }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" id="nombre" name="nombre" type="text" required>
        </div>

        <div class="form-group">
            <label for="pais">Pais:</label>
            <input class="form-control" id="pais" name="pais" type="text" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input class="form-control" id="edad" name="edad" type="number" required>
        </div>

        <div class="form-group">
            <label for="altura">Altura:</label>
            <input class="form-control" id="altura" name="altura" type="number" required>
        </div>

        <div class="form-group">
            <label for="peso">Peso:</label>
            <input class="form-control" id="peso" name="peso" type="number" required>
        </div>

        <div class="form-group">
            <label for="fecha_debut">Fecha de Profesión:</label>
            <input class="form-control" id="fecha_debut" name="fecha_debut" type="date" required>
        </div>

        <div class="form-group">
            <label for="mano">Mano:</label>
            <input class="form-control" id="mano" name="mano" type="text" required>
        </div>

        <div>
            <label for="reves">Revés:</label>
            <input class="form-control" id="reves" name="reves" type="text" required>
        </div>
        <div class="form-group">
            <label for="dinero_ganado">Dinero Ganado:</label>
            <input class="form-control" id="dinero_ganado" name="dinero_ganado" type="number" required>
        </div>
        <div class="form-group">
            <label for="mejor_rank">Mejor Rank:</label>
            <input class="form-control" id="mejor_rank" name="mejor_rank" type="text" required>
        </div>

        <div class="form-group">
            <label for="entrenador">Entrenador:</label>
            <input class="form-control" id="entrenador" name="entrenador" type="text" required>
        </div>

        <div class="form-group">
            <label for="num_victorias">Numero de Victorias:</label>
            <input class="form-control" id="num_victorias" name="num_victorias" type="number" required>
        </div>

        <div class="form-group">
            <label for="num_derrotas">Numero de Derrotas:</label>
            <input class="form-control" id="num_derrotas" name="num_derrotas" type="number" required>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input class="form-control" id="imagen" name="imagen" type="text" required>
        </div>


        <button class="btn btn-primary" type="submit">Crear</button>
        <a class="btn btn-secondary mx-2" href="{{ route('tenistas.index') }}">Volver</a>
    </form>

@endsection
