<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB - Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ff9800;
            padding: 15px 0;
        }
        .navbar-brand img {
            height: 50px;
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .category-card {
            border: 2px solid #ff9800;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .btn-orange {
            background-color: #ff9800;
            color: white;
            border: none;
        }
        .btn-orange:hover {
            background-color: #e68900;
        }
        .footer {
            background-color: #ff9800;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
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
    
    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banner1.jpg" alt="Nuestra gente UNAB">
            </div>
            <div class="carousel-item">
                <img src="banner2.jpg" alt="Explora nuestra tienda">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    
    <!-- Categorías -->
    <div class="container mt-5">
        <h2 class="text-center">Categorías de Productos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <img src="electronica.jpg" class="img-fluid" alt="Electrónica">
                    <h4>Electrónica</h4>
                    <p>Encuentra los mejores electrónicos.</p>
                    <button class="btn btn-orange">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="libros.jpg" class="img-fluid" alt="Libros">
                    <h4>Libros</h4>
                    <p>Explora nuestra colección de libros.</p>
                    <button class="btn btn-orange">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="ropa.jpg" class="img-fluid" alt="Ropa">
                    <h4>Ropa</h4>
                    <p>Encuentra la mejor ropa y accesorios.</p>
                    <button class="btn btn-orange">Ver más</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 UNAB Tienda. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
