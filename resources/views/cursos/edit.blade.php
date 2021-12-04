@extends('layouts.main')

@section('title', 'Editar Curso')

@section('content')
    <h1>Editar curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method("put")

        <div clas="form-group">
            <label for="name">Nome:</label><br>
            <input class="form-control" type="text" name="name" value="{{old('name',$curso->name)}}">

            @error('name')
                <small class="message_error">{{$message}}</small>
            @enderror

            <label for="description">Descrição:</label><br>
            <textarea class="form-control" name="description" cols="30" rows="5">{{old('description',$curso->description)}}</textarea>

            @error('description')
                <small class="message_error">{{$message}}</small>
            @enderror

            <label for="category">Categoria:</label><br>
            <input class="form-control" type="text" name="category" value="{{old('category',$curso->category)}}">

            @error('category')
                <small class="message_error">{{$message}}</small>
            @enderror

            <button class="btn btn-primary" type="submit">Atualizar</button>
        </div>

    </form>
@endsection
