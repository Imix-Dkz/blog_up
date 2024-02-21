@extends('layouts.plantilla')
@section('title', 'index')

<!--Aqui va agrupado el contenido de la página-->
@section('content')
<h1>Bienvenido a la pagina de cursos<br> dsd Cntrl... con view y layout</h1>
<!--a href="/cursos/create">Crear Curso</a-->
<a href="{{route('cursos.create')}}">Crear Cruso</a>
<ul>
    @foreach ($cursos as $curso)
        <li>
            {{--Se ajusta presentación de URL para no mostrar ID, sólo slug--}}
            {{-- <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a> --}}
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
        </li>
    @endforeach
</ul>
<br>
{{$cursos->links()}}
@endsection