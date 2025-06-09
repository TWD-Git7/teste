@extends('painel.autenticacao.masterPerfil')
@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <div class="text-center mb-3">
                                <img src="{{ asset('assets/images/logo-full.png') }}" alt="">
                            </div>
                            <h4 class="text-center mb-4">Cadastre sua conta</h4>
                            <form action="{{ route('perfil') }}">
                                <div class="form-group">
                                    <label class="mb-1"><strong>Nome</strong></label>
                                    <input type="text" class="form-control" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>Email</strong></label>
                                    <input type="email" class="form-control" placeholder="hello@example.com">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>Senha</strong></label>
                                    <input type="password" class="form-control" value="Password">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Já tem uma conta? <a class="text-primary" href="{{ route('login') }}">Entrar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
