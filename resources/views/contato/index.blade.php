<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>lista de contatos </h1>
    <a href="/contatos/create"class="btn btn-success">cadastro novo</a>
    <hr>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>AÇÕES</th>
        </tr>
        @foreach($contatos as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->telefone}}</td>
            <td>
            <a class="btn btn-primary" href="/contatos/{{ $c->id }}">editar</a>
            <a class="btn btn-danger" href="contatos/{{ $c->id }}">excluir</a>
    
            </td>
        </tr>
        @endforeach
    </table> 
</body>
</html>