@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <a href="/pedidos" class="btn btn-success mb-4">Listar</a>

                    <div class="form">
                        <form action="/pedidos" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('include.message')
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4 mb-4">
                                    <label for="" class="mb-2">Livro <span class="text-danger">*</span></label>
                                    <select name="livro_id" class="form-select select2">
                                        <option value="" hidden>Procurar livro</option>
                                        @foreach ($livros as $livro)
                                            <option value="{{ $livro->id }}"
                                                {{ old('livro_id') == $livro->id ? 'selected' : null }}>{{ $livro->titulo }}
                                                [{{ $livro->edicao }} | {{ $livro->editora }}]</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('livro_id'))
                                    <span class="text-danger">{{ $errors->first('livro_id') }}</span>
                                @endif
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="" class="mb-2">Leitor <span class="text-danger">*</span></label>
                                    <select name="leitor_id" class="form-select select2">
                                        <option value="" hidden>Procurar leitor</option>
                                        @foreach ($leitores as $leitor)
                                            <option value="{{ $leitor->id }}"
                                                {{ old('leitor_id') == $leitor->id ? 'selected' : null }}>
                                                {{ $leitor->nome }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('leitor_id'))
                                    <span class="text-danger">{{ $errors->first('leitor_id') }}</span>
                                @endif
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="mb-2">Data do Pedido <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="data_do_pedido" class="form-control"
                                        value="{{ old('data_do_pedido', null) }}" />
                                        @if ($errors->has('data_do_pedido'))
                                        <span class="text-danger">{{ $errors->first('data_do_pedido') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="mb-2">Data de Devolução</label>
                                    <input type="date" name="data_de_devolucao" class="form-control"
                                        value="{{ old('data_de_devolucao', null) }}" />
                                        @if ($errors->has('data_de_devolucao'))
                                        <span class="text-danger">{{ $errors->first('data_de_devolucao') }}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary mr-3">Salvar</button>
                                    <button type="reset" class="btn btn-danger mr-3">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    </div>
@endsection
