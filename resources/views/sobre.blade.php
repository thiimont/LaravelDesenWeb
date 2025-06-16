@extends('template')

@section('titulo', 'Sobre')

@section('conteudo')
    <div class="container mt-5">
        <h1>Sobre o framework {{$frm}}</h1>
        <p>Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependências dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.</p>
        <br>
        <h3>Requisitos do Laravel</h3>

        @if($frm == "(Laravel)")
            <ul>
                <li>PHP</li>
                <li>Composer</li>
            </ul>
        @else
            <p>Não há requisitos!</p>
        @endif

        <h3>Características</h3>

        <ol>
        @foreach($vtg as $dados)
            <li>{{$dados}}</li>
        @endforeach
        </ol>


        <h1>Equipe do projeto</h1>
        <div class="row">
            <div class="card" style="width: 12rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/4086/4086679.png" class="card-img-top" alt="Thiago Monteiro">
            <div class="card-body">
                <h5 class="card-title">Thiago Monteiro</h5>
                <p class="card-text">Desenvolvedor Backend</p>
                <a href="https://www.linkedin.com/in/thimont/" class="btn btn-primary">LinkedIn</a>
            </div>
            </div>

            <div class="card" style="width: 12rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/4086/4086679.png" class="card-img-top" alt="Guilherme Cauã">
            <div class="card-body">
                <h5 class="card-title">Guilherme Cauã</h5>
                <p class="card-text">Desenvolvedor Backend</p>
                <a href="https://www.linkedin.com/in/guilherme-cau%C3%A3-soares/" class="btn btn-primary">LinkedIn</a>
            </div>
            </div>
        </div>
    </div>
@endsection