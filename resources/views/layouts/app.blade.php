<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portal Esportivo</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <!-- Scripts do Vite (necessários para o Breeze) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <a href="{{ url('/') }}" class="logo">PORTAL ESPORTIVO</a>
            <nav>
                <a href="@yield('home_link')" class="nav-link">Home</a>
                <a href="@yield('produtos_link')" class="nav-link">Produtos</a>
                <a href="@yield('contato_link')" class="nav-link">Fale Conosco</a>

                <!-- LÓGICA DE AUTENTICAÇÃO -->
                @auth
                    {{-- Esta parte aparece SE o usuário estiver LOGADO --}}
                    <span class="nav-link user-greeting">Olá, {{ Auth::user()->name }}</span>

                    <!-- Formulário de Logout -->
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <a href="{{ route('logout') }}"
                           class="nav-link"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                @else
                    {{-- Esta parte aparece SE o usuário for um VISITANTE --}}
                    <a href="{{ route('login') }}" class="nav-link">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                    @endif
                @endauth
                <!-- FIM DA LÓGICA DE AUTENTICAÇÃO -->

            </nav>
        </div>
    </header>

    <main class="page-container">
        @yield('content')
    </main>

    <footer class="main-footer">
        <p>&copy; {{ date('Y') }} - Portal Esportivo. Todos os direitos reservados.</p>
    </footer>

    @stack('scripts')
</body>
</html>
