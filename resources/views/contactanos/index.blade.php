@extends('layouts.plantilla')
@section('title', 'Contactanos')
<!--Aqui va agrupado el contenido de la página-->
@section('content')
    <h1>Dejanos Un mensaje por favor...</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>Nombre:<input type="text" name="name" value="{{old('name')}}"></label><br>
            @error('name')
                <small>{{$message}}</small><br>
            @enderror
        <label>Correo:<input type="text" name="correo" value="{{old('correo')}}"></label><br>
            @error('correo')
                <small>{{$message}}</small><br>
            @enderror
        <label>
            Mensaje:<br>
            <textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
        </label><br>
            @error('mensaje')
                <small>{{$message}}</small><br>
            @enderror
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>alert("{{session('info')}}");</script>
    @endif
@endsection