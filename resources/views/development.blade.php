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
                <p>{{$admin->description}}</p>
            </div>
            <div id="about-us-home-deel-2">
                <img src="storage/{{$admin->afbeelding}}" alt="">
            </div>

        </div>

        <div class="projecten">
            <h2>Projecten</h2>
            <div class="blackbox">
                <div class="black">

                    <h3>Title</h3>
                </div>
                <div class="black"></div>
                <div class="black"></div>
            </div>

        </div>


@stop


