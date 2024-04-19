@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <p class="card-description"> <code><a href="/livros">Listar</a></code>
                    </p>

                    <div class="form">
                        <form action="/livros" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-">
                                    @include('include.message')
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Título <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Título" name="titulo"
                                        value="{{ old('titulo', null) }}" />
                                    @if ($errors->has('titulo'))
                                        <span class="text-danger">{{ $errors->first('titulo') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Nº de Pag. <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Nº de Pag."
                                        name="numero_de_paginas" value="{{ old('numero_de_paginas', null) }}" />
                                    @if ($errors->has('numero_de_paginas'))
                                        <span class="text-danger">{{ $errors->first('numero_de_paginas') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Editora <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Editora" name="editora"
                                        value="{{ old('editora', null) }}" />
                                    @if ($errors->has('editora'))
                                        <span class="text-danger">{{ $errors->first('editora') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Edição <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Edição" name="edicao"
                                        value="{{ old('edicao', null) }}" />
                                    @if ($errors->has('edicao'))
                                        <span class="text-danger">{{ $errors->first('edicao') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Data de Publicação <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Data de publicação"
                                        name="data_de_publicacao" value="{{ old('data_de_publicacao') }}" />
                                    @if ($errors->has('data_de_publicacao'))
                                        <span class="text-danger">{{ $errors->first('data_de_publicacao') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label for="" class="mb-2">Total de Livros <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Total de Livros"
                                        name="quantidade_existente" value="{{ old('quantidade_existente', null) }}" />
                                    @if ($errors->has('quantidade_existente'))
                                        <span class="text-danger">{{ $errors->first('quantidade_existente') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Curso </label>
                                    <input type="text" class="form-control" placeholder="Curso" name="curso"
                                        value="{{ old('curso', null) }}" />
                                    @if ($errors->has('curso'))
                                        <span class="text-danger">{{ $errors->first('curso') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Disciplina </label>
                                    <input type="text" class="form-control" placeholder="Disciplina" name="disciplina"
                                        value="{{ old('disciplina', null) }}" />
                                    @if ($errors->has('disciplina'))
                                        <span class="text-danger">{{ $errors->first('disciplina') }}</span>
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
    </div>
@endsection
