@extends('template')
@section('titulo', 'Dashboard')

@section('conteudo')
    <div class="container mt-5">
        <div>
            <h1>Dashboard</h1>
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
                                <a class="icon-link icon-link-hover" href="listausuarios">
                                Acessar
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de usuários</h5>
                                <p class="card-text">É possível cadastrar novos usuários aqui.</p>
                                <a class="icon-link icon-link-hover" href="frmusuario">
                                Acessar
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                                </a>
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
                                <a class="icon-link icon-link-hover" href="listaprodutos">
                                Acessar
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de produtos</h5>
                                <p class="card-text">É possível cadastrar novos produtos aqui.</p>
                                <a class="icon-link icon-link-hover" href="frmproduto">
                                Acessar
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                                </a>
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
                                <a class="icon-link icon-link-hover" href="listacontatos">
                                Acessar
                                <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection