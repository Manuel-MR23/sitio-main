<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('pestaña')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #e6f7f1;
        }

        .hero {
            background: url("{{ asset('img/parque1.jpg') }}") no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        footer {
            background-color: #198754;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Parque Las Riberas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/caracteristicas') }}">Características</a>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/historia') }}">Historia</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ubicacion') }}">Ubicación</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/opinion') }}">Opinión</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <h1 class="display-3 fw-bold">Parque Las Riberas</h1>
    </section>

    <div class="container my-5">
        @yield('contenido')
    </div>

    <footer>
        <p>© 2025 Parque Las Riberas | Desarrollado por Chino 💻</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>