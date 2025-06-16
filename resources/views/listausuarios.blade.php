@extends('template')
@section('titulo', 'Lista de usuários')

@section('conteudo')
    <style>
        td {
            word-break: break-word;
            max-width: 200px;
            white-space: normal;
        }
    </style>
    <div class="container mt-5">
        <h1>Lista de usuários</h1>
        <a href="frmusuario" class="btn btn-success">Adicionar usuário</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->nome }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                            <a href="/frmeditusuario/{{$u->id}}" class="btn btn-warning">Editar</a>

                            <form action="/excluirusuario/{{ $u->id }}" method="POST" class="d-inline">
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