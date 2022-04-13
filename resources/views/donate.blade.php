@extends('layouts.workspace')
@section('content')
    <div class="donate-container">
        <div class="donate-btns">
            <h1>steun for fighters</h1>
            <div class="btns">
                <button><strong>paypal</strong></button>
                <button><strong>gofundme</strong></button>
            </div>
        </div>
        <div class="donate-tekst">
            <h1>{{$donatie->title}}</h1>
            <h3>{{$donatie->description}}</h3>
        </div>
    </div>


@Stop
