@extends('layouts.main')

@section('title', 'Formulário de Contato')

@section('content')

<h1>Envie uma mensagem</h1>

<form action="{{route('contact.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="name">Nome:</label>
        <input class="form-control" type="text" name="name">

        @error('name')
            <small class="message_error">{{$message}}</small>
        @enderror

        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email">

        @error('email')
            <small class="message_error">{{$message}}</small>
        @enderror

        <label for="message">Mensagem:</label>
        <textarea class="form-control" name="message" cols="30" rows="5"></textarea>

        @error('message')
            <small class="message_error">{{$message}}</small>
        @enderror

        <button class="btn btn-primary" type="submit">Enviar</button>

    </div>

</form>

@if (session('info'))
    <script>
        alert( "{{ session('info') }}" );
    </script>
@endif

@endsection
