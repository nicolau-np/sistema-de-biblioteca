@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mb-3">Informações do leitor</h4>
                            <div class="column mb-2"><span>Leitor:</span> {{ $pedido->leitor->nome }}</div>
                            <div class="column mb-2"><span>Nº de B.I:</span> {{ $pedido->leitor->bi }}</div>
                            <div class="column mb-2"><span>Gênero:</span> {{ $pedido->leitor->genero }}</div>
                            <div class="column mb-2"><span>Data de Nascimento:</span>
                                {{ date('d-m-Y', strtotime($pedido->leitor->data_nascimento)) }}</div>
                            <div class="column mb-2"><span>Origem:</span> {{ $pedido->leitor->origem }}</div>
                            <div class="column mb-2"><span>Tipo:</span> {{ $pedido->leitor->tipo }}</div>
                            <div class="column mb-2"><span>Telefone:</span> {{ $pedido->leitor->telefone }}

                                <h4 class="mt-4 mb-3">Informações do livro</h4>
                                <div class="column mb-2"><span>Título:</span> {{ $pedido->livro->titulo }}</div>
                                <div class="column mb-2"><span>Nº de Pag.:</span> {{ $pedido->livro->numero_de_paginas }}
                                </div>
                                <div class="column mb-2"><span>Editora:</span> {{ $pedido->livro->editora }}</div>
                                <div class="column mb-2"><span>Edição:</span> {{ $pedido->livro->edicao }}</div>
                                <div class="column mb-2"><span>Total de Livros:</span>
                                    {{ $pedido->livro->quantidade_existente }}</div>
                                <div class="column mb-2"><span>Data de Publicação:</span>
                                    {{ $pedido->livro->data_de_publicacao }}</div>
                                <div class="column mb-2"><span>Curso:</span> {{ $pedido->livro->curso }}</div>
                                <div class="column mb-2"><span>Disciplina:</span> {{ $pedido->livro->disciplina }}</div>

                            </div>


                        </div>

                        <div class="col-md-4">
                            <a href="/pedidos/{{ $pedido->id }}/edit" class="btn btn-primary d-block mb-4">Editar</a>
                            <form action="/pedidos/{{ $pedido->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger d-block mb-4">Eliminar</button>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    @endsection
