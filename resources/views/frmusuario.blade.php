@extends('template')
@section('titulo', 'Cadastro de usuários')

@section('conteudo')
    <div class="container mt-5">
        <h1 class="text-center">Cadastro</h1>
        <form action="/addusuario" method="POST">
            @csrf
            
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <ul>
                    <li>A senha deve ter pelo menos 6 caracteres. Use símbolos e números para maior segurança.</li>
                </ul>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection