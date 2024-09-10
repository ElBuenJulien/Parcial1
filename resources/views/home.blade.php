@extends('vistas.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Examen Parcial 1</h1>

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://wallpapers.com/images/hd/msi-true-gaming-dragon-robot-7n5zd5bnx5zm03d0.webp" class="d-block w-100 carousel-img" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="https://wallpapers.com/images/hd/asus-republic-of-gamers-ttcb9pccsnac8mit.webp" class="d-block w-100 carousel-img" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="https://wallpapers.com/images/hd/play-with-nvidia-qgjz8nj2yxgap2jc.webp" class="d-block w-100 carousel-img" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="https://wallpapers.com/images/high/amd-logo-galaxy-illustration-0zf7h1tj6hgvlwhq.webp" class="d-block w-100 carousel-img" alt="Imagen 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        
    </div>

    <style>
        .carousel-img {
            height: 500px; /* Ajusta la altura según tu preferencia */
            object-fit: cover; /* Asegura que la imagen se recorte adecuadamente para mantener la proporción */
        }
    </style>
@endsection
