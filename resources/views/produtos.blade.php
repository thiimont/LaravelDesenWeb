@extends('template')
@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container mt-5">
        <h1>Produtos</h1>
        <div class="row">
            @if($prods->isEmpty())
                <p>Cri, cri, cri... não há produtos disponíveis!</p>
            @endif

            @foreach($prods as $p)
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('storage/' . $p['imagem']) }}" class="card-img-top" alt="{{ $p['nome'] }}">
                    <div class="card-body">
                        <p class="card-title text-center fw-bold">{{ $p['nome'] }}</p>
                        <p class="card-text"><span class="fw-bold">R$</span>{{ $p['preco'] }}</p>
                        <p class="card-text"><span class="fw-bold">{{ $p['quantidade'] }}</span> disponíveis</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection