@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <x-panel-de-pesquisa prefixroute="/livros" />

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Titulo </th>
                                    <th> Nº de Pag. </th>
                                    <th> Editora </th>
                                    <th> Edição </th>
                                    <th> Data de Publicação </th>
                                    <th> Total </th>
                                    <th></th>
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
                                        <td>
                                            <a href="/livros/{{ $livro->id }}"
                                                class="btn btn-warning btn-sm">Detalhes</a>
                                            <a href="/livros/{{ $livro->id }}/edit"
                                                class="btn btn-primary btn-sm ml-2">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="paginations mb-4">
                    <x-paginacao :objects="$livros"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
