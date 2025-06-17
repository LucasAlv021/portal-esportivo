@extends('layouts.app')

@section('title', 'Fale Conosco')
@section('home_link', route('site.' . $esporte))
@section('produtos_link', route('site.produtos', ['esporte' => $esporte]))
@section('contato_link', route('site.contato', ['esporte' => $esporte]))

@section('content')
<div class="content-section">
    <h1 class="section-title">Fale Conosco</h1>
    <p>Página de contato para a seção de {{ $esporte }}.</p>
    <!-- Aqui você adicionaria um formulário de contato -->
</div>
@endsection
