@extends('layouts.plantilla')
@section('title', 'Cursos Edit')

<!--Aqui va agrupado el contenido de la página-->
@section('content')
<label>En esta página estas editando el curso:
    <b>{{$curso->name}}</b>
</label><!--h1></h1--><br><br>

<form action="{{route('cursos.update', $curso)}}" method="post">
    
    <!--Lo Siguiente es una Directiva de BLADE para seguridad-->
    @csrf @method('put')

    <label>Nombre:<br><input type="text" name="name" value="{{old('name', $curso->name)}}"></label><br>
    @error('name')
        <small>*{{$message}}</small><br>
    @enderror
    <label>Descripci&oacute;n:<br>
        <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
    </label><br>
    @error('descripcion')
        <small>*{{$message}}</small><br>
    @enderror
    <label>Categoria:<br>
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
    </label><br>
    @error('categoria')
        <small>*{{$message}}</small><br>
    @enderror
    <button type="submit">Actualizar Formulario</button>
    <br><a href="{{route('cursos.show', $curso)}}">Volver a la página del Curso: {{$curso->name}}</a>
    <br><a href="{{route('cursos.index')}}">Volver al Inicio</a>
</form>
@endsection