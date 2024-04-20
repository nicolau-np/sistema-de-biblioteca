@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="column mb-2"><span>Título:</span> {{ $livro->titulo }}</div>
                            <div class="column mb-2"><span>Nº de Pag.:</span> {{ $livro->numero_de_paginas }}</div>
                            <div class="column mb-2"><span>Editora:</span> {{ $livro->editora }}</div>
                            <div class="column mb-2"><span>Edição:</span> {{ $livro->edicao }}</div>
                            <div class="column mb-2"><span>Total de Livros:</span> {{ $livro->quantidade_existente }}</div>
                            <div class="column mb-2"><span>Data de Publicação:</span> {{ $livro->data_de_publicacao }}</div>
                            <div class="column mb-2"><span>Curso:</span> {{ $livro->curso }}</div>
                            <div class="column mb-2"><span>Disciplina:</span> {{ $livro->disciplina }}</div>

                        </div>

                        <div class="col-md-4">
                            <a href="/livros/{{ $livro->id }}/edit" class="btn btn-primary d-block mb-4">Editar</a>
                            <form action="/livros/{{ $livro->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger d-block mb-4">Eliminar</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
@endsection
