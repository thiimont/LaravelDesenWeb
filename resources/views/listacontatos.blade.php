@extends('template')
@section('titulo', 'Lista de contatos')

@section('conteudo')
    <style>
        td {
            word-break: break-word;
            max-width: 200px;
            white-space: normal;
        }
    </style>
    <div class="container mt-5">
        <h1>Lista de contatos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($msgs as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->nome }}</td>
                        <td>{{ $m->email }}</td>
                        <td>{{ $m->assunto }}</td>
                        <td>{{ $m->mensagem }}</td>
                        <td>
                            <form action="/excluircontato/{{ $m->id }}" method="POST" class="d-inline">
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