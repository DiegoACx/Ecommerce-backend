@extends('layout.app')

@section('content')
     <!-- Formulario -->
     <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h3 class="text-center text-warning">Crear Nuevo Producto</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre del producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Ingresa la descripción del producto"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-select">
                                <option selected>Seleccione una categoría</option>
                                <option value="1">Electrónica</option>
                                <option value="2">Libros</option>
                                <option value="3">Ropa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="text" class="form-control" placeholder="Ingresa el precio del producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen del Producto</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Crear Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
   
