@extends('layouts.app')

@section('title', 'Basquete')
@section('home_link', route('site.basquete'))
@section('produtos_link', route('site.produtos', ['esporte' => 'basquete']))
@section('contato_link', route('site.contato', ['esporte' => 'basquete']))

@section('content')
<div class="content-section">
    <h1 class="section-title">Últimas Notícias de Basquete</h1>
    <div class="grid-container">
        @forelse($noticias as $noticia)
            <div class="card news-card">
                <img src="{{ $noticia['imagem'] }}" alt="Imagem da notícia">
                <div class="card-content">
                    <h3>{{ $noticia['titulo'] }}</h3>
                    <p class="news-source">Fonte: {{ $noticia['fonte'] }}</p>
                    <a href="{{ $noticia['link'] }}" target="_blank" class="btn-main">Leia mais</a>
                </div>
            </div>
        @empty
            <p>Nenhuma notícia encontrada no momento.</p>
        @endforelse
    </div>
</div>

<div class="content-section">
    <h1 class="section-title">NBA Standings</h1>
    <div class="grid-container">
        <div class="card table-card">
            <h3>Conferência Leste (Exemplo)</h3>
            <p>Aqui você colocaria a tabela do Leste.</p>
        </div>
        <div class="card table-card">
            <h3>Conferência Oeste (Exemplo)</h3>
            <p>Aqui você colocaria a tabela do Oeste.</p>
        </div>
    </div>
</div>
@endsection
