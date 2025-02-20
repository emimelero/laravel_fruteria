@extends('plantilla')
{{-- @include('partials.nav') --}}
@section('contenido')
    

    <div class="container mt-5">

        @if (auth()->user() && auth()->user()->login == 'admin')
            <a href="{{ route('frutas.create') }}" class="btn btn-success btn-sm my-2">
                <i class="bi bi-plus-circle">Añadir Fruta</i> 
            </a>
        @elseif (auth()->user())
            <h4>Bienvenido/a {{ auth()->user()->login }}</h4>
        @else
            <h4>No registrado</h4>
        @endif 

        
        


        
        

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Temporada</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    @if(auth()->user() && auth()->user()->login == 'admin')
                        <th>Opciones</th>
                    @endif
                    
                </tr>
            </thead>
            <tbody>
                @foreach($frutas as $fruta)
                    <tr>
                        <td>{{ $fruta->nombre }}</td>
                        <td>{{ $fruta->temporada }}</td>
                        <td>{{ number_format($fruta->precio, 2) }}€</td>
                        <td>{{ $fruta->stock}}</td>
                        @if(auth()->user() && auth()->user()->login == 'admin')
                            <td>
                                <a href="{{ route('frutas.edit', $fruta->id)}}" class="btn btn-success btn-sm">Actualizar</a>
                                <form action="{{ route('frutas.destroy', $fruta->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        @endif
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@endsection
