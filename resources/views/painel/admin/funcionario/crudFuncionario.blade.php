@extends('painel.master')
@section('content')
    {{-- <!--**********************************
                Content body start
      ***********************************--> --}}
    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head d-flex flex-wrap mb-sm-4 align-items-start">
                <div class="page-titles me-auto mb-2 d-lg-block mb-3">
                    <div class="welcome-text">
                        <h4>Olá, Seja Bem-Vendo!</h4>
                        <span>Painel</span>
                    </div>
                </div>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addFuncionarioModal"
                    class="btn btn-primary btn-rounded mb-3"><i class="fa fa-user-plus me-3"></i>Novo Funcionário</a>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Funcionários</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nome</th>
                                            <th>Nº Telefone</th>
                                            <th>Email</th>
                                            <th>Função</th>
                                            <th>Actação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic1.jpg') }}"
                                                    alt=""></td>
                                            <td>Tiger Nixon</td>
                                            <td><a href="javascript:void(0);"><strong>929 411 170</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Secretario</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic2.jpg') }}"
                                                    alt=""></td>
                                            <td>Garrett Winters</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Funcionario normal</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic3.jpg') }}"
                                                    alt=""></td>
                                            <td>Ashton Cox</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Administrador</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!--**********************************
            Content body end
        *******************************--> --}}
@endsection
