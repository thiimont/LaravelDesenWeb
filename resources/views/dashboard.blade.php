@extends('template')
@section('titulo', 'Dashboard')

@section('conteudo')
    <div class="container mt-5">
        <div>
            <h2>Bem-vindo(a), {{ session('usuario_nome') }}</h2>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        👥 Gerenciamento de usuários
                    </button>
                </h2>
                
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lista de usuários</h5>
                                <p class="card-text">Veja e gerencie o cadastro de usuários.</p>
                                <a href="listausuarios" class="btn btn-success">Acessar</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de usuários</h5>
                                <p class="card-text">É possível cadastrar novos usuários aqui.</p>
                                <a href="frmusuario" class="btn btn-success">Acessar</a>
                            </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        🏷️ Gerenciamento de produtos
                    </button>
                </h2>

                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lista de produtos</h5>
                                <p class="card-text">Veja e gerencie todos os produtos presentes no sistema.</p>
                                <a href="listaprodutos" class="btn btn-success">Acessar</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de produtos</h5>
                                <p class="card-text">É possível cadastrar novos produtos aqui.</p>
                                <a href="frmproduto" class="btn btn-success">Acessar</a>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ➕ Outros
                    </button>
                </h2>

                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lista de contatos</h5>
                                <p class="card-text">Veja e gerencie todas as mensagens enviadas por usuários.</p>
                                <a href="listacontatos" class="btn btn-success">Acessar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection