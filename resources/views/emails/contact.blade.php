<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1{
            color: blue;
        }
    </style>
    <title>Mensagem enviada</title>
</head>
<body>
    <h1>Mensagem enviada</h1>
    <p>Este é o primeiro email que estou enviando pelo Laravel.</p>
    <p><strong>Nome: </strong>{{$contact['name']}}</p>
    <p><strong>Email: </strong>{{$contact['email']}}</p>
    <p><strong>Mensagem: </strong>{{$contact['message']}}</p>
</body>
</html>
