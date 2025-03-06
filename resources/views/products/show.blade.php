<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar, .footer {
            background-color: #ff9800;
        }
        .btn-warning {
            background-color: #ff9800;
            border-color: #ff9800;
        }
        .btn-warning:hover {
            background-color: #e68900;
            border-color: #e68900;
        }
        .card {
            border-color: #ff9800;
        }
        .text-warning {
            color: #ff9800 !important;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="UNAB"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card p-3">
                    <img src="producto.jpg" class="img-fluid" alt="Producto">
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="text-warning">Nombre del Producto</h2>
                <p><strong>Categoría:</strong> Electrónica</p>
                <p>Descripción del producto. Este es un producto increíble con características únicas que lo hacen destacar en el mercado. Perfecto para cualquier ocasión.</p>
                <h3 class="text-warning">$99.99</h3>
                <button class="btn btn-warning">Agregar al Carrito</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-white text-center py-3 mt-4">
        <p>&copy; 2023 UNAB Tienda. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
