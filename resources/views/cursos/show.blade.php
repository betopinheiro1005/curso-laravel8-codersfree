@extends('layouts.main')

@section('title', 'Curso de ' . $curso->name)

@section('content')
    <h1>Curso de {{$curso->name}}</h1>

    <div class="mb-3 mt-3">
          <a class="btn btn-primary" href="{{route('cursos.index')}}">Cursos</a>
          <a class="btn btn-success" href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    </div>

    <p><strong>Categoria: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>

    <form action="{{route("cursos.destroy", $curso->id)}}" method="post">
        @csrf
        @method("delete")
        <button class="btn btn-danger" type="submit">Excluir curso</button>
    </form>

@endsection
