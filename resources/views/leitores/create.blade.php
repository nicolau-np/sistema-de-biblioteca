@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <a href="/livros" class="btn btn-success mb-4">Listar</a>

                    <div class="form">
                        <form action="/leitores" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('include.message')
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-5 mb-3">
                                    <label for="" class="mb-2">Nome <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nome" name="nome"
                                        value="{{ old('nome', null) }}" />
                                    @if ($errors->has('nome'))
                                        <span class="text-danger">{{ $errors->first('nome') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Nº de B.I/Cedula <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Nº de B.I/Cedula" name="bi"
                                        value="{{ old('bi', null) }}" />
                                    @if ($errors->has('bi'))
                                        <span class="text-danger">{{ $errors->first('bi') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Gênero <span class="text-danger">*</span></label>
                                    <select name="genero" class="form-control form-control-sm">
                                        <option value="" hidden>Gênero</option>
                                        <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : null }}>
                                            Masculino</option>
                                        <option value="Femenino" {{ old('genero') == 'Femenino' ? 'selected' : null }}>
                                            Femenino
                                        </option>
                                    </select>
                                    @if ($errors->has('genero'))
                                        <span class="text-danger">{{ $errors->first('genero') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Data de Nascimento <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Data de Nascimento"
                                        name="data_nascimento" value="{{ old('data_nascimento', null) }}" />
                                    @if ($errors->has('data_nascimento'))
                                        <span class="text-danger">{{ $errors->first('data_nascimento') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Origem <span class="text-danger">*</span></label>
                                    <select name="origem" id="" class="form-control form-control-sm">
                                        <option value="" hidden>Origem</option>
                                        <option value="Interno" {{ old('origem') == 'Interno' ? 'selected' : null }}>Interno
                                        </option>
                                        <option value="Externo" {{ old('origem') == 'Externo' ? 'selected' : null }}>Externo
                                        </option>
                                    </select>
                                    @if ($errors->has('origem'))
                                        <span class="text-danger">{{ $errors->first('origem') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label for="" class="mb-2">Tipo <span
                                            class="text-danger">*</span></label>
                                    <select name="tipo" id="" class="form-control form-control-sm">
                                        <option value="" hidden>Tipo</option>
                                        <option value="Estudante">Estudante</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Visitante">Visitante</option>
                                    </select>

                                    @if ($errors->has('tipo'))
                                        <span class="text-danger">{{ $errors->first('tipo') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Telefone </label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefone"
                                        value="{{ old('telefone', null) }}" />
                                    @if ($errors->has('telefone'))
                                        <span class="text-danger">{{ $errors->first('telefone') }}</span>
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
