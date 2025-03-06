<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB - Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header class="bg-warning text-white text-center py-3">
        <h1>UNAB Tienda</h1>
        <nav>
            <a href="#" class="text-white mx-2">Inicio</a>
            <a href="#" class="text-white mx-2">Promociones</a>
            <a href="#" class="text-white mx-2">Categorías</a>
            <a href="#" class="text-white mx-2">Contacto</a>
        </nav>
    </header>
    
    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banner1.jpg" class="d-block w-100" alt="Nuestra gente UNAB">
            </div>
            <div class="carousel-item">
                <img src="banner2.jpg" class="d-block w-100" alt="Explora nuestra tienda">
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
                <div class="card border-warning text-center p-3">
                    <img src="electronica.jpg" class="card-img-top" alt="Electrónica">
                    <div class="card-body">
                        <h4 class="card-title text-warning">Electrónica</h4>
                        <p class="card-text">Encuentra los mejores electrónicos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning text-center p-3">
                    <img src="libros.jpg" class="card-img-top" alt="Libros">
                    <div class="card-body">
                        <h4 class="card-title text-warning">Libros</h4>
                        <p class="card-text">Explora nuestra colección de libros.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning text-center p-3">
                    <img src="ropa.jpg" class="card-img-top" alt="Ropa">
                    <div class="card-body">
                        <h4 class="card-title text-warning">Ropa</h4>
                        <p class="card-text">Encuentra la mejor ropa y accesorios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-warning text-white text-center py-3 mt-4">
        <p>&copy; 2025 UNAB Tienda. Todos los derechos reservados.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>