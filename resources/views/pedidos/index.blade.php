@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <x-panel-de-pesquisa prefixroute="/pedidos" />

                    <div class="row">
                        <div class="col-md-12">
                            @include('include.message')
                        </div>
                    </div>
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
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                        <td>{{ Str::limit($pedido->titulo,30) }}</td>
                                        <td>{{ $pedido->numero_de_paginas }}</td>
                                        <td>{{ $pedido->editora }}</td>
                                        <td>{{ $pedido->edicao }}</td>
                                        <td>{{ date('d-m-Y', strtotime($pedido->data_de_publicacao)) }}</td>
                                        <td>{{ $pedido->quantidade_existente }}</td>
                                        <td>
                                            <a href="/pedidos/{{ $pedido->id }}"
                                                class="btn btn-warning btn-sm">Detalhes</a>
                                            <a href="/pedidos/{{ $pedido->id }}/edit"
                                                class="btn btn-primary btn-sm ml-2">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="paginations mb-4">
                    <x-paginacao :objects="$pedidos"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
