@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $menu }}</h4>
                    <a href="/livros" class="btn btn-success mb-4">Listar</a>

                    <div class="form">
                        <form action="/livros" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('include.message')
                                </div>
                            </div>
                            <div class="row">

                                

                                
                               
                               

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
