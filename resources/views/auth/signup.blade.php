@extends('plantilla')
@section('titulo', 'Login')
@section('contenido')
@if (!empty($error))
    <div class="text-danger">
        {{ $error }}
    </div>
@endif
<form action="{{ route('newsignup') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="login">Usuario:</label>
        <input type="text" class="form-control" name="login" id="login" />
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" />
    </div>
    <input type="submit" name="enviar" value="Registrar" class="btn btn-dark btn-block">

</form>
@endsection
