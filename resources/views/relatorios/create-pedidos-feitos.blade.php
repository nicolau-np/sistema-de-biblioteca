@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>

                    <div class="form">
                        <form action="/relatorios/print/pedidos-feitos" method="get">
                            @csrf
                            @method('GET')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('include.message')
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Data Inicial <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Data Inicial" name="data_inicial"
                                        value="{{ old('data_inicial', null) }}" />
                                    @if ($errors->has('data_inicial'))
                                        <span class="text-danger">{{ $errors->first('data_inicial') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="" class="mb-2">Data Final <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Data Final"
                                        name="data_final" value="{{ old('data_final', null) }}" />
                                    @if ($errors->has('data_final'))
                                        <span class="text-danger">{{ $errors->first('data_final') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-1 mt-4">
                                    <button type="submit" class="btn btn-primary mr-3">Imprimir</button>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
