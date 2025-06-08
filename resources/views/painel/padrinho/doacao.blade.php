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
                        <span>Padrinhos - Doação</span>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Faça a Sua Doação</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Coordenadas Bancárias</h4>
                            <div class="basic-form">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <label><strong>Banco:</strong> BAI (Banco Angolano de Investimentos)</label><br>
                                        <label><strong>IBAN:</strong> AO06004400000000123456789</label><br>
                                        <label><strong>Titular:</strong> Associação WANGUNUA WA MWALILU</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><strong>Banco:</strong> Banco Millennium Atlântico</label><br>
                                        <label><strong>IBAN:</strong> AO06000100000000234567890</label><br>
                                        <label><strong>Titular:</strong> Associação WANGUNUA WA MWALILU</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success rounded">
                                            <h6 class="text-success"><strong>Palavras de Apreço</strong></h6>
                                            <p class="mb-0">
                                                A sua doação não é apenas um gesto de generosidade, é um ato de esperança e
                                                transformação.
                                                Com o seu apoio, estaremos mais próximos de garantir o acesso à educação
                                                para dezenas de jovens.
                                                Muito obrigado por acreditar no futuro!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Deixe Aqui o Seu Comprovativo</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Comprovativo no Fomarto de PDF,
                                                PNG, JPN..</label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submeter</button>
                                </form>
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
