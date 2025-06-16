@extends('template')
@section('titulo', 'Área restrita')

@section('conteudo')
    <div class="container mt-5">
        <form action="/logar" method="POST" enctype="multipart/form-data">
            @csrf
                <h1>Faça login para continuar</h1>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="frmusuario" class="btn btn-link">Não tem uma conta? Cadastre-se!</a>
        </form>
    </div>
@endsection