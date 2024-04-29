<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros da biblioteca</title>
</head>
<body>
<h1>Livros da biblioteca</h1>
<br/>
<br/>
<br/>
<br/>
<table border="1" width="100%">
    <thead>
        <tr>
            <th> Titulo </th>
            <th> Nº de Pag. </th>
            <th> Editora </th>
            <th> Edição </th>
            <th> Data de Publicação </th>
            <th> Total </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
            <tr>
                <td>{{ Str::limit($livro->titulo,30) }}</td>
                <td>{{ $livro->numero_de_paginas }}</td>
                <td>{{ $livro->editora }}</td>
                <td>{{ $livro->edicao }}</td>
                <td>{{ date('d-m-Y', strtotime($livro->data_de_publicacao)) }}</td>
                <td>{{ $livro->quantidade_existente }}</td>

            </tr>
        @endforeach

    </tbody>
</table>
</body>
</html>
