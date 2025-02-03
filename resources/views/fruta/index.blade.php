<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('frutas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('partials.nav')

    <div class="container mt-5">


        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Temporada</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($frutas as $fruta)
                    <tr>
                        <td>{{ $fruta->nombre }}</td>
                        <td>{{ $fruta->temporada }}</td>
                        <td>{{ number_format($fruta->precio, 2) }}€</td>
                        <td>{{ $fruta->stock}}</td>
                        <td>
                            <a href="{{ route('frutas.edit', $fruta->id)}}" class="btn btn-success btn-sm">Actualizar</a>
                            <form action="{{ route('frutas.destroy', $fruta->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$frutas->links('pagination::bootstrap-5')}}
    </div>



</body>
</html>
