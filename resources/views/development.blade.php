@extends('layouts.workspace')

@section('content')
    <div>
        <div class="container1">
            <div class="text-en-buttons">
                <h1>forfighters</h1>
                <div class="buttons">
                    <button><h3>ABOUT US</h3></button><button><h3>DONATE</h3></button><button><h3>JOIN US</h3></button>
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
                @foreach($projecten as $project)
                    <div class="gray">
                <div class="black">
                    <img src="storage/{{$project->afbeelding}}" alt="Projecten foto">

                </div>
                        <h3>{{$project->title}}</h3>
                        <button><a href="{{Route('projecten')}}#project-{{$project->id}}">Lees meer!</a></button>
                    </div>
                @endforeach
            </div>

        </div>


@stop


