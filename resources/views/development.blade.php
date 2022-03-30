@extends('layouts.workspace')

@section('content')
    <div>
        <div class="container1">
            <div class="text-en-buttons">
                <h1>forfighters</h1>
                <div class="buttons">
                    <button><h3>About Us</h3></button><button><h3>Donate</h3></button><button><h3>Join Us</h3></button>
                </div>

            </div>
        </div>

        <div class="about-us-home">
            <div id="about-us-home-tekst">
                <h2>{{$admin->title}}</h2>
                <p>{{$admin->aboutus}}</p>
            </div>
            <div id="about-us-home-deel-2">
                <img src="./fotos/about-us.png" alt="">
            </div>
        </div>

        <div class="projecten">
            <h2>projecten</h2>
            <div class="blackbox">
                <div class="black"></div>
                <div class="black"></div>
                <div class="black"></div>
            </div>

        </div>


@stop


