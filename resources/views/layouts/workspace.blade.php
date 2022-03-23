<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workspace</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/donate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projecten.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vrijwilligers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">


    <!-- Scripts -->
</head>
<body>
<header>
    @include('layouts.workspace-nav')
    <!-- Als een section word aangegeven, zoekt het eerst naar een aanpassing in de view pagina, als daar niks gevonden word, wordt het veld ingevuld door de inhoud onder section en boven show -->
    @yield('header')
</header>

<main>
    <!-- Als een yield word aangegeven, zoekt het naar een aanpassing in de view pagina, als daar niks gevonden word, vult het niks in-->
    @yield('content')
</main>

<footer>

    @include('layouts.workspace-footer')
</footer>
</body>
</html>
