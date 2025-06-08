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
                            <h4 class="text-center mb-4">Entre na sua conta</h4>
                            <form action="{{ route('paneil-admin') }}">
                                <div class="form-group">
                                    <label class="mb-1"><strong>Email</strong></label>
                                    <input type="email" class="form-control" value="hello@example.com">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1"><strong>Senha</strong></label>
                                    <input type="password" class="form-control" value="Password">
                                </div>
                                <div class="row d-flex justify-content-between mt-4 mb-2">
                                    <div class="form-group">
                                        <div class="form-check custom-checkbox ms-1">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                            <label class="form-check-label" for="basic_checkbox_1">Lembre-se da minha
                                                preferência</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="#">Esqueceu sua senha?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Queres ser bolseiro e não tem uma conta? <a class="text-primary"
                                        href="{{ route('pageRegistar') }}">Cadastre-se</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
