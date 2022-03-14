<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workspace</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navigator.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/navigator.js') }}" defer></script>
</head>
<body>
<header>
    <!-- Als een section word aangegeven, zoekt het eerst naar een aanpassing in de view pagina, als daar niks gevonden word, wordt het veld ingevuld door de inhoud onder section en boven show -->
    @section('header')
        De header
        @show
</header>
<nav>
    <!-- Navigator -->
    <div id="myNav" class="overlay">
        <!-- Navigatie dicht doen -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#" class="donation flex">Login</a>
            <a href="#">Aanmelden</a>
        </div>
    </div>
    <!-- Opening navigatie -->
    <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="opening-nav">&#9776; </span>
</nav>
<main>
    <!-- Als een yield word aangegeven, zoekt het naar een aanpassing in de view pagina, als daar niks gevonden word, vult het niks in-->
    @yield('content')
</main>
<footer>
    FOOTER
</footer>
</body>
</html>
