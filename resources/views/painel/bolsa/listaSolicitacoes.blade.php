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
                        <span>Lista dos Bolseiros</span>
                    </div>
                </div>
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
                                            <th>Idade</th>
                                            <th>Nº Telefone</th>
                                            <th>Email</th>
                                            <th>Nível Acadêmico</th>
                                            <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic1.jpg') }}"
                                                    alt=""></td>
                                            <td><a href="javascript:void(0);"><strong>Tiger Nixon</strong></a></td>
                                            <td>17</td>
                                            <td><a href="javascript:void(0);"><strong>929 411 170</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Tecnico Medio</td>
                                            <td>
                                                <div class="dropdown ms-auto text-end">
                                                    <div class="btn-link d-flex" data-bs-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2">
                                                                </circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Mais Informações</a>
                                                        <a class="dropdown-item" href="#">Atribuir Bolsa</a>
                                                        <a class="dropdown-item" href="#">Negar Solicitação</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic2.jpg') }}"
                                                    alt=""></td>
                                            <td><a href="javascript:void(0);"><strong>Garrett Winters</strong></a></td>
                                            <td>19</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Tecnico Medio</td>
                                            <td>
                                                <div class="dropdown ms-auto text-end">
                                                    <div class="btn-link d-flex" data-bs-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2">
                                                                </circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Mais Informações</a>
                                                        <a class="dropdown-item" href="#">Atribuir Bolsa</a>
                                                        <a class="dropdown-item" href="#">Negar Solicitação</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('assets/images/profile/small/pic3.jpg') }}"
                                                    alt=""></td>
                                            <td><a href="javascript:void(0);"><strong>Ashton Cox</strong></a></td>
                                            <td>22</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>Tecnico Medio</td>
                                            <td>
                                                <div class="dropdown ms-auto text-end">
                                                    <div class="btn-link d-flex" data-bs-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12"
                                                                    r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="19" cy="12"
                                                                    r="2">
                                                                </circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Mais Informações</a>
                                                        <a class="dropdown-item" href="#">Atribuir Bolsa</a>
                                                        <a class="dropdown-item" href="#">Negar Solicitação</a>
                                                    </div>
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
