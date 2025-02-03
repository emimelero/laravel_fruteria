<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar fruta</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar fruta</h1>
        <form action="{{ route('frutas.update',$frutas->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
 
            <div class="col-12">
                <label for="nombre" class="form-label">Nombre de la fruta:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{$frutas->nombre}}">
            </div>
            
    
            <div class="col-12">
                <label for="temporada" class="form-label">temporada:</label>
                <input type="text" id="temporada" name="temporada" class="form-control" value="{{$frutas->temporada}}">
            </div>
            

            <div class="col-12">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" id="precio" name="precio" class="form-control" step="0.01" value="{{$frutas->precio}}">
            </div>

            <div class="col-12">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" id="stock" name="stock" class="form-control" value="{{$frutas->stock}}">
            </div>

            <div class="col-12">
                <label for="foto" class="form-label">Foto:</label>
                <input type="text" id="foto" name="foto" class="form-control" value="{{$frutas->foto}}">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>

        
        
    </div>

    <?php

        echo "<img src=$frutas->foto height='200px' width='350px'>"
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>