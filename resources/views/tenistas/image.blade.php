@php use App\Models\Tenistas; @endphp

{{-- Ponemos el título --}}
@section('title', 'Editar Imagen del Tenista')

{{-- Agregamos el contenido de la página --}}
@section('content')
    <h1>Editar Imagen del Tenista</h1>

    {{-- Codigos de validación de los errores, ver request validate del controlador --}}
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

    <dl class="row">
        <dt class="col-sm-2">ID:</dt>
        <dd class="col-sm-10">{{$tenista->id}}</dd>
        <dt class="col-sm-2">Nombre:</dt>
        <dd class="col-sm-10">{{$tenista->nombre}}</dd>
        <dt class="col-sm-2">Pais:</dt>
        <dd class="col-sm-10">{{$tenista->pais}}</dd>
        <dt class="col-sm-2">Fecha de nacimiento:</dt>
        <dd class="col-sm-10">{{$tenista->fecha_nacimiento}}</dd>
        <dt class="col-sm-2">Edad:</dt>
        <dd class="col-sm-10">{{$tenista->edad}}</dd>
        <dt class="col-sm-2">Altura:</dt>
        <dd class="col-sm-10">{{$tenista->altura}}</dd>
        <dt class="col-sm-2">Peso:</dt>
        <dd class="col-sm-10">{{$tenista->peso}}</dd>
        <dt class="col-sm-2">Fecha de Profesión:</dt>
        <dd class="col-sm-10">{{$tenista->fecha_debut}}</dd>
        <dt class="col-sm-2">Mano:</dt>
        <dd class="col-sm-10">{{$tenista->mano}}</dd>
        <dt class="col-sm-2">Revés:</dt>
        <dd class="col-sm-10">{{$tenista->reves}}</dd>
        <dt class="col-sm-2">Entrenador:</dt>
        <dd class="col-sm-10">{{$tenista->entrenador}}</dd>
        <dt class="col-sm-2">Dinero Ganado:</dt>
        <dd class="col-sm-10">{{$tenista->dinero_ganado}}</dd>
        <dt class="col-sm-2">Mejor Rank:</dt>
        <dd class="col-sm-10">{{$tenista->mejor_rank}}</dd>
        <dt class="col-sm-2">Numero de Victorias:</dt>
        <dd class="col-sm-10">{{$tenista->num_victorias}}</dd>
        <dt class="col-sm-2">Numero de Derrotas:</dt>
        <dd class="col-sm-10">{{$tenista->num_derrotas}}</dd>
        <dt class="col-sm-2">Fecha de creación:</dt>
        <dd class="col-sm-10">{{$tenista->created_at}}</dd>
        <dt class="col-sm-2">Fecha de actualización:</dt>
        <dd class="col-sm-10">{{$tenista->updated_at}}</dd>
        <dt class="col-sm-2">Imagen:</dt>
        <dd class="col-sm-10"><img src="{{ $tenista->imagen }}" alt="{{ $tenista->nombre }}" width="150"></dd>
    </dl>

    <form action="{{ route("tenistas.updateImage", $tenista->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input accept="image/*" class="form-control-file" id="imagen" name="imagen" required type="file">
            <small class="text-danger"></small>
        </div>

        <button class="btn btn-primary" type="submit">Actualizar</button>
        <a class="btn btn-secondary mx-2" href="{{ route('tenistas.index') }}">Volver</a>
    </form>

@endsection
