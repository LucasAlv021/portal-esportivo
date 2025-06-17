@extends('layouts.app')

@section('title', 'Produtos de ' . ucfirst($esporte))
@section('home_link', route('site.' . $esporte))
@section('produtos_link', route('site.produtos', ['esporte' => $esporte]))
@section('contato_link', route('site.contato', ['esporte' => $esporte]))

@section('content')
<div class="content-section">
    <h1 class="section-title">Produtos de {{ ucfirst($esporte) }}</h1>
    <div class="grid-container">

        {{-- Loop para exibir cada produto encontrado no banco de dados --}}
        @forelse ($produtos as $produto)
            <div class="card product-card">
                <img src="{{ $produto->imagem ?? 'https://placehold.co/400x400/eee/000?text=Produto' }}" alt="{{ $produto->nome }}">
                <div class="card-content">
                    <h3>{{ $produto->nome }}</h3>
                    <p class="product-price">{{ $produto->preco }}</p>
                    <button class="btn-main">Ver Detalhes</button>
                </div>
            </div>
        @empty
            {{-- Mensagem que aparece se não houver produtos para o esporte --}}
            <p>Nenhum produto encontrado para este esporte no momento.</p>
        @endforelse

    </div>
</div>
@endsection
