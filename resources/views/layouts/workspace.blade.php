<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workspace</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
</head>
<body>
<header>
    <!-- Als een section word aangegeven, zoekt het eerst naar een aanpassing in de view pagina, als daar niks gevonden word, wordt het veld ingevuld door de inhoud onder section en boven show -->
    @yield('header')
</header>

<main>
    <!-- Als een yield word aangegeven, zoekt het naar een aanpassing in de view pagina, als daar niks gevonden word, vult het niks in-->
    @yield('content')
    <nav>
        <!-- Navigator -->
       <div id="btn"> <span class="noselect"> <a href="{{ route('login') }}" class="donation flex">Login</a></span><div id="circle"></div></div>
      <div id="btn"> <span class="noselect"> <a href="{{ route('register') }}">Aanmelden</a></span><div id="circle"></div></div>
    </nav>
</main>

<footer>
</footer>
</body>
</html>
