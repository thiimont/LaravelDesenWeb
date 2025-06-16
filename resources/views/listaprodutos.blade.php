@extends('template')
@section('titulo', 'Lista de produtos')

@section('conteudo')
    <style>
        td {
            word-break: break-word;
            max-width: 200px;
            white-space: normal;
        }
    </style>
    <div class="container mt-5">
        <h1>Lista de produtos</h1>
        <a href="frmproduto" class="btn btn-success">Adicionar produto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($prods as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td><img src="{{ asset('storage/' . $p['imagem']) }}" width=50px></td>
                        <td>{{ $p->nome }}</td>
                        <td>R${{ $p->preco }}</td>
                        <td>{{ $p->quantidade }}</td>
                        <td>
                            <a href="/frmeditproduto/{{$p->id}}" class="btn btn-warning">Editar</a>

                            <form action="/excluirproduto/{{ $p->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection