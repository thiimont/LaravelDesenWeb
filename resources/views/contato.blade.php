@extends('template')
@section('titulo', 'Contato')

@section('conteudo')
    <div class="container mt-5">
        <form action="/enviarcontato" method="POST">
            @csrf
                <h1>Contato</h1>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection