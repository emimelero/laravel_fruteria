@extends('plantilla')
@include('partials.nav')
@section('contenido')
    <div class="container mt-5">
        <h1 class="mb-4">Añadir fruta</h1>
        <form action="{{ route('frutas.store') }}" method="POST" class="row g-3">
            @csrf
 
            <div class="col-12">
                <label for="nombre" class="form-label">Nombre de la fruta:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            
    
            <div class="col-12">
                <label for="temporada" class="form-label">Temporada:</label>
                <input type="text" id="temporada" name="temporada" class="form-control">
            </div>
            

            <div class="col-12">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" id="precio" name="precio" class="form-control" step="0.01">
            </div>

            <div class="col-12">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" id="stock" name="stock" class="form-control">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-success">Añadir</button>
            </div>
        </form>

        
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection