@extends('layouts.app')

@section('title', 'Fale Conosco')
@section('home_link', route('site.' . $esporte))
@section('produtos_link', route('site.produtos', ['esporte' => $esporte]))
@section('contato_link', route('site.contato', ['esporte' => $esporte]))

@section('content')
<div class="content-section">
    <h1 class="section-title">Relatar um Problema</h1>
    <p>Encontrou um problema ou tem alguma sugestão para a seção de <strong>{{ ucfirst($esporte) }}</strong>? Use o formulário abaixo.</p>

    <div class="form-container">
        {{-- Exibe a mensagem de sucesso após o envio --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Exibe os erros de validação --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf

            <!-- Campo oculto para sabermos de qual seção o contato veio -->
            <input type="hidden" name="esporte" value="{{ $esporte }}">

            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <!-- Se o usuário estiver logado, preenche o nome automaticamente -->
                <input type="text" id="nome" name="nome" class="form-control" value="{{ auth()->user()->name ?? old('nome') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Seu E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email ?? old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto" class="form-control" value="{{ old('assunto') }}" required>
            </div>

            <div class="form-group">
                <label for="mensagem">Descreva o problema ou sugestão:</label>
                <textarea id="mensagem" name="mensagem" class="form-control" rows="6" required>{{ old('mensagem') }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">Enviar Relato</button>
            </div>
        </form>
    </div>
</div>
@endsection
