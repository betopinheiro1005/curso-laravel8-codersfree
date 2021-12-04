@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>Cursos disponíveis</h1>

    <div class="m-3">
        <a class="btn btn-success" href="{{route('cursos.create')}}">Criar Curso</a>
    </div>

    <ul>
        @foreach ($cursos as $curso)
            <a href="{{route('cursos.show', $curso)}}"><li>{{$curso->name}}</li></a>
        @endforeach
    </ul>

    {{ $cursos->links() }};
@endsection
