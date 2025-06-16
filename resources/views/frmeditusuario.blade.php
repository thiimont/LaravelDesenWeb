@extends('template')
@section('titulo', 'Editar usuário')

@section('conteudo')
    <div class="container mt-5">
        <h1 class="text-center">Editando usuário com ID {{ $user->id }}</h1>
        <form action="/atualizarusuario/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="fnome" name="fnome" required value="{{ $user->nome }}">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="femail" name="femail" required value="{{ $user->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="fsenha" name="fsenha" placeholder="Deixe em branco para manter a senha atual.">
                </div>
                <button type="submit" class="btn btn-warning">Atualizar</button>
        </form>
    </div>
@endsection