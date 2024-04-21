@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="column mb-2"><span>Nome:</span> {{ $leitor->nome }}</div>
                            <div class="column mb-2"><span>Nº de B.I:</span> {{ $leitor->bi }}</div>
                            <div class="column mb-2"><span>Gênero:</span> {{ $leitor->genero }}</div>
                            <div class="column mb-2"><span>Data de Nascimento:</span> {{ date('d-m-Y', strtotime($leitor->data_nascimento)) }}</div>
                            <div class="column mb-2"><span>Origem:</span> {{ $leitor->origem }}</div>
                            <div class="column mb-2"><span>Tipo:</span> {{ $leitor->tipo }}</div>
                            <div class="column mb-2"><span>Telefone:</span> {{ $leitor->telefone }}</div>

                        </div>

                        <div class="col-md-4">
                            <a href="/leitores/{{ $leitor->id }}/edit" class="btn btn-primary d-block mb-4">Editar</a>
                            <form action="/leitores/{{ $leitor->id }}" method="post">
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
