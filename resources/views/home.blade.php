@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@section('content')
    <header>
    </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info-subtle">Sistema de Gestión</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <P class="text-center">¡Bienvenido de nuevo  {{ Auth::user()->name }}, a ATP! </P>
                        <div class="text-center">
                            <img alt="Saludo" width="10px" src="{{ asset('images/saludo.gif') }}">
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
