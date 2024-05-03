<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #132a5d;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #ffffff;">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #ffffff;">Equipamentos</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="" style="color: #ffffff;">Documentos</a>
                    </li>
                    <ul class="navbar-nav d-lg-none">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDocuments" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                                Documentos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownDocuments">
                                <li><a class="dropdown-item" href="">Início</a></li>
                                <li><a class="dropdown-item" href="">Criar Documentos</a></li>
                                <li><a class="dropdown-item" href="">Enviar Documentos</a></li>
                                <li><a class="dropdown-item" href="">Documentos em Revisão</a></li>
                                <li><a class="dropdown-item" href="">Documentos Aprovados</a></li>
                                <li><a class="dropdown-item" href="">Documentos Expirados</a></li>
                                <li><a class="dropdown-item" href="">Controles de Documentos</a></li>
                                <li><a class="dropdown-item" href="">Estatísticas</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #ffffff;">Adicionar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #ffffff;">Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: #ffffff;">Configurações</a>
                    </li>
                </ul>

                @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="">Profile</a></li>
                            <li><a class="dropdown-item" href="">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>

    <!-- include necessary JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
