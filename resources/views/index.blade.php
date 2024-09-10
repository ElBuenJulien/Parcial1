@extends('vistas.plantilla')

@section('title', 'Lista de Productos')

@section('content')
    <h1>Productos Disponibles</h1>

    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $producto['imagen'] }}" class="card-img-top" alt="{{ $producto['nombre'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                        <p class="card-text">{{ $producto['descripcion'] }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ $producto['precio'] }}</p>
                        <a href="{{ route('show', $producto['id']) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
