<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seu Esporte - Portal Esportivo</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
</head>
<body class="home-body">

    <!-- O raio agora é um elemento posicionado no centro da tela -->
    <div class="lightning-divider">
      <!-- Recomendo uma imagem PNG com fundo transparente e dimensões como 150x1080 pixels -->
      <img src="{{ asset('img/raio.png') }}" alt="Raio divisor">
    </div>

    <!-- Container para as duas escolhas de esporte -->
    <div class="selection-container">

        <!-- Seção Esquerda: Futebol -->
        <a href="{{ route('site.futebol') }}" class="sport-choice">
            <img src="{{ asset('img/futebol.png') }}" alt="Bola de Futebol">
            <h2>FUTEBOL</h2>
        </a>

        <!-- Seção Direita: Basquete -->
        <a href="{{ route('site.basquete') }}" class="sport-choice">
            <img src="{{ asset('img/basquete.png') }}" alt="Bola de Basquete">
            <h2>BASQUETE</h2>
        </a>

    </div>
</body>
</html>
