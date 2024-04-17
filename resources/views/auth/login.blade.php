@extends('layouts.app')
@section('content')

        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                               Sis BiBlioteca
                            </div>
                            <h4>Olá! vamos começar</h4>
                            <h6 class="font-weight-light">Faça login para continuar.</h6>
                            <form class="pt-3" method="post" action="/auth/login">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Nome de usuário" name="username" value="{{ old('username', null) }}" />
                                        @if ($errors->has('username'))
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                            @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                        placeholder="Palavra-Passe" name="password" value="{{ old('password', null) }}" />
                                        @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        >ENTRAR</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>

@endsection
