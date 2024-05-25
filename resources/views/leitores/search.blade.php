@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <x-panel-de-pesquisa prefixroute="/leitores" />

                    <div class="row">
                        <div class="col-md-12">
                            @include('include.message')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Pesquisando por {{$texto_pesquisado}}
                        </div>
                    </div>
                    @if($leitores->count()==0)
                        <h1>Nenhum resultado encontrado...</h1>
                    @else
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> Nome </th>
                                <th> Nº de BI/Cédula</th>
                                <th> Gênero </th>
                                <th> Data de Nascimento </th>
                                <th> Origem </th>
                                <th> Tipo </th>
                                <th> Telefone </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($leitores as $leitor)
                                <tr>
                                    <td>{{ Str::limit($leitor->nome,30) }}</td>
                                    <td>{{ $leitor->bi }}</td>
                                    <td>{{ $leitor->genero }}</td>
                                    <td>{{ $leitor->data_nascimento }}</td>
                                    <td>{{ date('d-m-Y', strtotime($leitor->data_nascimento)) }}</td>
                                    <td>{{ $leitor->origem }}</td>
                                    <td>{{ $leitor->tipo }}</td>
                                    <td>{{ $leitor->telefone }}</td>
                                    <td>
                                        <a href="/leitores/{{ $leitor->id }}"
                                           class="btn btn-warning btn-sm">Detalhes</a>
                                        <a href="/leitores/{{ $leitor->id }}/edit"
                                           class="btn btn-primary btn-sm ml-2">Editar</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="paginations mb-4">
                        <x-paginacao :objects="$leitores"/>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
