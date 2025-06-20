@extends('template')
@section('titulo', 'Editar produto')

@section('conteudo')
    <div class="container mt-5">
        <h1 class="text-center">Editando produto com ID {{ $prod->id }}</h1>
        <form action="/atualizarproduto/{{ $prod->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required value="{{ $prod->nome }}">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Preço</label>
                    <input type="number" class="form-control" id="preco" name="preco" required value="{{ $prod->preco }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required value="{{ $prod->quantidade }}">
                </div>
                <button type="submit" class="btn btn-warning">Atualizar</button>
        </form>
    </div>
@endsection