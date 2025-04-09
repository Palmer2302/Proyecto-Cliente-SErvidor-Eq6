<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Gestion Cocina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f0;
        }
        .hero {
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        .navbar .nav-link {
            color: #000;
        }
        .auth-links {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion Cocina</a>
            <div class="auth-links">
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Crear Cuenta</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <h1>Bienvenido a Gestion Cocina</h1>
        <p>Descubre los mejores platillos con ingredientes frescos y recetas auténticas.</p>
        <a href="{{ route('menu') }}" class="btn btn-danger">Ver Menú</a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>