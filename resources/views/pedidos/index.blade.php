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
                                    <th> Nome </th>
                                    <th> Nº de B.I. </th>
                                    <th> Titulo do Livro </th>
                                    <th> Data de pedido </th>
                                    <th> Data de devolução </th>
                                    <th> Operador </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                        <td>{{ Str::limit($pedido->leitor->nome,30) }}</td>
                                        <td>{{ $pedido->leitor->bi }}</td>
                                        <td>{{ $pedido->livro->titulo }}</td>
                                        <td>{{ date('d-m-Y', strtotime($pedido->data_do_pedido)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($pedido->data_de_devolucao)) }}</td>
                                        <td>{{ $pedido->user->name }}</td>
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
