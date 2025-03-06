@extends('layout.app')

@section('name')
<div class="container mt-4">
    <h2 class="text-center">Nuestros Productos</h2>
    <div class="row">
        <div class="col-md-4 mb-4" v-for="producto in productos">
            <div class="card text-center border-orange" style="border-color: #ff9800;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title text-orange" style="color: #ff9800;">Producto X</h5>
                    <p class="card-text">Categoría: Electrónica</p>
                    <p class="fw-bold">$99.99</p>
                    <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center border-orange" style="border-color: #ff9800;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title text-orange" style="color: #ff9800;">Producto 2</h5>
                    <p class="card-text">Categoría: Libros</p>
                    <p class="fw-bold">$49.99</p>
                    <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center border-orange" style="border-color: #ff9800;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title text-orange" style="color: #ff9800;">Producto 3</h5>
                    <p class="card-text">Categoría: Ropa</p>
                    <p class="fw-bold">$29.99</p>
                    <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center border-orange" style="border-color: #ff9800;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title text-orange" style="color: #ff9800;">Producto 4</h5>
                    <p class="card-text">Categoría: Electrónica</p>
                    <p class="fw-bold">$199.99</p>
                    <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center border-orange" style="border-color: #ff9800;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title text-orange" style="color: #ff9800;">Producto 5</h5>
                    <p class="card-text">Categoría: Libros</p>
                    <p class="fw-bold">$59.99</p>
                    <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 
