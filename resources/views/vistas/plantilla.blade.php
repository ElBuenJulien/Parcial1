<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid justify-content-start">
            <a class="btn btn-outline-success me-2" href="{{ route('home') }}">Inicio</a>
            <a class="btn btn-outline-success me-2" href="{{ route('products') }}">Productos</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('contact') }}">Contactanos</a>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
