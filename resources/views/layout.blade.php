<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personalizado.css') }}">
    <title>Catálogo de Imagens</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Catálogo de Imagens</a>
            </div>
        </nav>
    </header>
    <main class="mt-5 pt-5">
        @yield('principal')
    </main>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Voltar para o topo</a>
            </p>
            <p class="mb-1">&copy; Célula de Tecnologia da Informação</p>
        </div>
    </footer>
</body>
</html>