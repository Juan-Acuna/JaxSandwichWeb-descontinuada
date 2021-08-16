<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{{ asset('css/estilos.css') }}}">
        <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}" type="image/x-icon">
    </head>
    <body class="bg-dark text-white">
        <nav class="navbar navbar-dark navbar-expand-lg bg-danger text-white">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-3" href="http://jaxsandwich.com/">Jax Sandwich</a>
                <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white fs-5 fw-light" aria-current="page" href="http://jaxsandwich.com/">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white fs-5 fw-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Proyectos
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item text-white fw-lighter" href="http://sandwichbots.jaxsandwich.com/">Sandwich Bots</a>
                                    <ul>
                                        <li><a class="dropdown-item text-secondary fs-6 fw-lighter" href="http://sandwichcord.jaxsandwich.com/">Sandwichcord Framework</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-white fw-lighter" href="http://bot.jaxsandwich.com/">Jax Sandwich Bot</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-5 fw-light" href="http://personas.jaxsandwich.com/">Personas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>