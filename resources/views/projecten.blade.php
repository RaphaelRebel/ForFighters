@extends('layouts.workspace')
@section('content')
    <div class="projecten-container">
        <div class="projecten-header">
            <h1>Projecten</h1>
        </div>
@foreach($project as $projecten)
        <div class="projecten-tekst-en-foto">

            <div class="projecten-tekst">
                <h1>{{$projecten->title}}</h1>
                <p>{{$projecten->description_1}}</p>
                @if( ! $projecten->desciption_2)
                    <p>{{$projecten->description_2}}</p>
                    @endif
                @if( ! $projecten->desciption_3)
                    <p>{{$projecten->description_3}}</p>
                @endif
            </div>
            <img src="{{asset('storage/'. $projecten->afbeelding)}}" alt="Projecten afbeelding">

        </div>
        <hr>
    </div>

    @endforeach
@Stop
