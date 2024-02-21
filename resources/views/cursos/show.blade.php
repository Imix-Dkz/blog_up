@extends('layouts.plantilla')
@section('title', 'Show')

<!--Aqui va agrupado el contenido de la página-->
@section('content')
    <h1>Bienvenido al curso:<b>{{$curso->name}}</b></h1>
    <p>Categoria:<b>{{$curso->categoria}}</b></p>
    <p><b>Descripcion:</b>{{$curso->descripcion}}</p>
    <!--h2><br>... dsd Cntrl... 
        <br>con una view... y layout 
        <br>y pase de objeto por ID
    </h2-->
    
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a><br>
    <a href="{{route('cursos.index')}}">Volver al Inicio</a>
    <!--<h1>Bienvenido al curso: <?php //echo $curso; ?>, dsd Cntrl</h1>-->
    <br>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf @method('delete')
        <button type="submit">Eliminar Curso</button>
    </form>
@endsection
