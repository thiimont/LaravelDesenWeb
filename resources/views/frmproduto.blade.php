@extends('template')
@section('titulo', 'Cadastro de produtos')

@section('conteudo')
    <div class="container mt-5">
        <h1 class="text-center">Cadastrar produto</h1>
        <form action="/addproduto" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço</label>
                    <input type="number" class="form-control" id="preco" name="preco" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Imagem</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection