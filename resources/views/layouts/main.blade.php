<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> -->

    <!-- Mudando o tiúlo de forma dinámica -->
    <title>@yield('title')</title>

    <!-- Fontes da aplicação -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap do carrossel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">

    <!--INÍCIO DA META TAG OG -->
    <meta property="OG:type" content="website">
    <meta property="OG:title" content="FOCUS DC, LDA.">
    <meta property="OG:image" content="">
    <meta property="og:description" content="Foco em Soluções Inteligentes.">
    <meta property="OG:site_name" content="FOCUS DC, LDA.">
    <!--FIM  META TAG OG -->

</head>
<!-- CSS da aplicação -->
<link rel="stylesheet" href="/css/style.css">
<script src="/js/script.js"></script>
</head>


<body class="central">
{{-- 
    <header>
        <nav class="navbar">
            <div class="container">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('/img/logo_1.jpg') }}" alt="Logo">
                </a>

                <!-- Menu Items -->
                <ul class="navbar-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Nossos Serviços</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>

    </header>
    --}}
    <!-- Determinando a área do nosso conteúdo. -->
        <div class="container-fluid">
            <div class="row">
               {{--@if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif--}}
                @yield('content')
            </div>
        </div>
        <footer>
            <p>Focus DC &copy; 2024</p>
        </footer>
    

</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>