@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Nuestros Productos 11</h2>
    <div class="row">

        @foreach ($listProducts as $product)
            <div class="col-md-4 mb-4" v-for="producto in productos">
                <div class="card text-center border-orange" style="border-color: #ff9800;">
                    <div class="card-body">
                        <img src="{{$product->url_image}}" class="card-img-top" alt="Producto 1">
                        <h5 class="card-title text-orange" style="color: #ff9800;">{{$product->name}}</h5>
                        <p class="card-text">Categoría: {{$product->category_id}}</p>
                        <p class="fw-bold">$ {{$product->price}}</p>
                        <button class="btn text-white" style="background-color: #ff9800;">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        @endforeach
            
    </div>
</div>
@endsection

 
