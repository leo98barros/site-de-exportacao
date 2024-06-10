<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @yield('css')
    <style>
        .rodape {
            position: sticky;
            bottom: 0;
        }

        .conteudo {
            min-height: calc(80vh - 40px); /* Leva em consideração a altura do cabeçalho e do rodapé */
            padding-bottom: 40px; /* Leva em consideração a altura do rodapé */
            overflow: auto; /* Permite a rolagem do conteúdo caso exceda o tamanho da tela */
        }       
    </style>
</head>
    
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('produto') }}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('sobre') }}">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('contato') }}">Contato</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item mx-2">
                                    <a href="#" class="btn btn-primary" role="button">
                                        Painel
                                    </a>
                                </li>
                                <li class="nav-item mx-2">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <input type="submit" value="Sair" class="btn btn-secondary">
                                    </form>
                                </li>
                            @else
                                <li class="nav-item mx-2">
                                    <a href="{{ route('login') }}" class="btn btn-primary" role="button">
                                        Entrar
                                    </a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="conteudo">
        <div class="container-fluid py-3">
            @yield('body')
        </div>
    </main>

    <footer class="footer-copyright text-center py-3 rodape">
        <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-muted">Léo Sobral &copy; {{ date('Y') }}</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                {{ config('app.name') }}
            </a>
        
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="{{ route('sobre') }}" class="nav-link px-2 text-muted">Sobre</a></li>
                <li class="nav-item"><a href="{{ route('contato') }}" class="nav-link px-2 text-muted">Contato</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>
</html>
