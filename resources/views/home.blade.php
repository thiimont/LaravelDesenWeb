@extends('template')

@section('titulo', 'Home')

@section('conteudo')
    <div class="container mt-5">
        <div class="row">
            @foreach($cards as $c)
                <div class="card" style="width: 14rem;">
                    <img src="{{ $c['imagem'] }}" class="card-img-top" alt="{{ $c['nome'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $c['nome'] }} </h5>
                        <p class="card-text">{{ $c['texto'] }}</p>
                        <p class="card-text">{{ $c['preco'] }}</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection