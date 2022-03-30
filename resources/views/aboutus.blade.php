@extends('layouts.workspace')
    @section('content')
        <div class="aboutus-container">
            <div class="aboutus-tekst">
                <h1>{{$admin->title}}</h1>
                <p>{{$admin->description}}</p>
            </div>
            <div class="aboutus-image">
                <img src="fotos/aboutus.png" alt="">
            </div>
        </div>


    @Stop
