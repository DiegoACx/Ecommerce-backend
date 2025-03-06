@extends('layout.app')

@section('content')
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
@endsection

    
