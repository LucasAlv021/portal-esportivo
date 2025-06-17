@extends('layouts.app')

@section('title', 'Futebol')
@section('home_link', route('site.futebol'))
@section('produtos_link', route('site.produtos', ['esporte' => 'futebol']))
@section('contato_link', route('site.contato', ['esporte' => 'futebol']))

@section('content')
<div class="content-section">
    <h1 class="section-title">Últimas Notícias de Futebol</h1>
    <div class="grid-container">
        {{-- Loop de notícias --}}
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
    <h1 class="section-title">Tabelas</h1>
    <div class="grid-container">
        <div class="card table-card">
            <h3>Brasileirão 2024 (Exemplo)</h3>
            <p>Aqui você colocaria o código HTML ou a imagem da tabela do Brasileirão.</p>
        </div>
        <div class="card table-card">
            <h3>Libertadores (Exemplo)</h3>
            <p>Aqui você colocaria o código HTML ou a imagem da tabela da Libertadores.</p>
        </div>
        <div class="card table-card">
            <h3>Champions League (Exemplo)</h3>
            <p>Aqui você colocaria o código HTML ou a imagem da tabela da Champions.</p>
        </div>
    </div>
</div>
@endsection
