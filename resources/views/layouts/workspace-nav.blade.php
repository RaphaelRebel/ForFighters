
<link rel="stylesheet" href="{{ asset('css/navigator.css') }}">

<script src="{{ asset('js/navigator.js') }}" defer></script>

<!-- Navigatie -->
<div id="myNav" class="overlay">
    <!-- Navigatie dicht doen -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#" class="donation flex">DONATE</a>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Projects</a>
        <a href="#">Contact</a>
        <a href="#">Vrijwillegers</a>
        <div class="flex">
            <a href="#">NL</a>
            <a href="#">EN</a>
        </div>
    </div>
</div>
<!-- Opening navigatie -->
<img class="logo" src="{{URL::asset('images/forfighterslogo.jpg')}}" alt="Forfighterslogo" />
<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="opening-nav">&#9776; </span>
