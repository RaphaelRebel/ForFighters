@extends('layouts.workspace')

@section('content')
  <h1>Welkom</h1>
@stop

@section('nav')
    <!-- Navigator -->
    <div id="btn"> <span class="noselect"> <a href="{{ route('login') }}" class="donation flex">Login</a></span><div id="circle"></div></div>
    <div id="btn"> <span class="noselect"> <a href="{{ route('register') }}">Aanmelden</a></span><div id="circle"></div></div>
    @stop

