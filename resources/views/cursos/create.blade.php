@extends('layouts.plantilla')
@section('title', 'Cursos Create')

<!--Aqui va agrupado el contenido de la página-->
@section('content')
<h1>En esta página podras crear un curso...<br>dsd Cntrl ... con vista y layout</h1>
<form action="{{route('cursos.store')}}" method="POST">
    <!--Lo Siguiente es una Directiva de BLADE para seguridad-->
    @csrf
    <label>Nombre:<br><input type="text" name="name" value="{{old('name')}}"></label><br>
        @error('name')
            <small>*{{$message}}</small><br>
        @enderror
    <label>Descripci&oacute;n:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label><br>
        @error('descripcion')
            <small>*{{$message}}</small><br>
        @enderror
    <label>Categoria:<br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label><br>
        @error('categoria')
            <small>*{{$message}}</small><br>
        @enderror
    <button type="submit">Enviar Formulario</button>
</form>
@endsection