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

    <div class="lightning-divider">
      <img src="{{ asset('img/raio.png') }}" alt="Raio divisor">
    </div>

    <div class="selection-container">

        <!-- A tag 'a' foi trocada por 'div' com um atributo 'data-url' -->
        <div class="sport-choice" data-url="{{ route('site.futebol') }}">
            <img src="{{ asset('img/futebol.png') }}" alt="Bola de Futebol">
            <h2>FUTEBOL</h2>
        </div>

        <div class="sport-choice" data-url="{{ route('site.basquete') }}">
            <img src="{{ asset('img/basquete.png') }}" alt="Bola de Basquete">
            <h2>BASQUETE</h2>
        </div>

    </div>

<!-- SCRIPT DA ANIMAÇÃO -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const choices = document.querySelectorAll('.sport-choice');
        const lightning = document.querySelector('.lightning-divider');

        choices.forEach(choice => {
            choice.addEventListener('click', function(e) {
                e.preventDefault(); // Impede a navegação imediata

                const url = this.dataset.url;

                // Esconde o raio
                lightning.classList.add('hidden');

                // Identifica o item clicado e o outro item
                const otherChoice = [...choices].find(c => c !== this);

                // Adiciona as classes de animação
                this.classList.add('expanded');
                otherChoice.classList.add('hidden');

                // Espera a animação terminar (1 segundo) para redirecionar
                setTimeout(() => {
                    window.location.href = url;
                }, 1000); // 1000ms = 1s
            });
        });
    });
</script>
<!-- FIM DO SCRIPT -->

</body>
</html>
