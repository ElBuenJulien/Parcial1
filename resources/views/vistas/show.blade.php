@extends('vistas.plantilla')

@section('title', $producto['nombre'])

@section('content')
    <h1>{{ $producto['nombre'] }}</h1>
    <img src="{{ $producto['imagen'] }}" class="img-fluid" alt="{{ $producto['nombre'] }}">
    <p>{{ $producto['descripcion'] }}</p>
    <p><strong>Precio:</strong> ${{ $producto['precio'] }}</p>
    <a href="{{ route('products') }}" class="btn btn-secondary">Volver a Productos</a>
@endsection
