@extends('layouts.main')

@section('title', 'Criar Curso')

@section('content')
    <h1>Criar um curso</h1>
    <form action="{{ route('cursos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label><br>
            <input class="form-control" type="text" name="name" value={{old('name')}}>

            @error('name')
                <small class="message_error">{{$message}}</small>
            @enderror

            <label for="description">Descrição:</label><br>
            <textarea class="form-control" name="description" cols="30" rows="5">{{old('description')}}</textarea>

            @error('description')
                <small class="message_error">{{$message}}</small>
            @enderror

            <label for="category">Categoria:</label><br>
            <input class="form-control" type="text" name="category" value={{old('category')}}>

            @error('category')
                <small class="message_error">{{$message}}</small>
            @enderror

            <button class="btn btn-primary" type="submit">Criar</button>
        </div>
    </form>
@endsection
