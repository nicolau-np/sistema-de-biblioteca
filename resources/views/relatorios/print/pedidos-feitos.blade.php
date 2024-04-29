<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos Feitos de {{ $dataInicial }} até {{ $dataFinal }}</title>
</head>
<body>
<h1>Pedidos Feitos</h1>
<br/>
<br/>
<br/>
Data Inicial: {{ $dataInicial }}
<br/>
Data Final: {{ $dataFinal }}
<br/>
<br/>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>Data de pedido</th>
            <th>Leitor</th>
            <th>Nº Tef. do leitor</th>
            <th>Titulo do livro</th>
            <th>Edição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidoDeLivros as $pedidoDeLivro)
        <tr>
            <td>{{ date('d-m-Y', strtotime($pedidoDeLivro->data_do_pedido)) }}</td>
            <td>{{ $pedidoDeLivro->leitor->nome }}</td>
            <td>{{ $pedidoDeLivro->leitor->telefone }}</td>
            <td>{{ $pedidoDeLivro->livro->titulo }}</td>
            <td>{{ $pedidoDeLivro->livro->edicao }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
