@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>

                    <div class="row">
                        <div class="col-md-2">
                                <a href="/relatorios/print/livros-da-biblioteca">Livros da Biblioteca</a>
                        </div>

                        <div class="col-md-2">
                                <a href="/relatorios/print/livros-nao-devolvidos">Livros Não devolvidos</a>
                        </div>

                        <div class="col-md-2">
                                <a href="/relatorios/create-pedidos-feitos">Pedidos Feitos</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
